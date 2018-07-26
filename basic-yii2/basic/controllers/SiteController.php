<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

//Chamar a classe EntryForm
use app\models\EntryForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

//##################### Método de teste ################################
/*
Quando a aplicação recebe a requisição e determina que a ação say é responsável por tratar a requisição, a aplicação alimentará este parâmetro com o parâmetro de mesmo nome encontrado na requisição. Em outras palavras, se a requisição inclui um parâmetro message com o valor "Goodbye", a variável $message na ação receberá esse valor.

    http://localhost/aprendendo_yii2/basic-yii2/basic/web/index.php?r=site/say&message=Envia+mensagem+nesse+parametro+da+action.

    Esse trexo do códogo é usado para resolver a rota e acessarmos a view say.php

    index.php?r=site/say&message=Envia+mensagem+nesse+parametro+da+action.
    
    Nessa parte, é chamado controller/action&message=Envia+mensagem+nesse+parametro+da+action.

    Resultado da requisição uma view com a mensagem: Envia mensagem nesse parametro da action.

O parâmetro r na URL acima requer mais explicação. Ele significa rota, um ID abrangente e único de uma aplicação que se refere a uma ação. O formato da rota é IDdoController/IDdaAction. Quando a aplicação recebe uma requisição, ela verificará este parâmetro, usando a parte IDdoController para determinar qual classe de controlador deve ser instanciada para tratar a requisição. Então o controlador usará a parte IDdaAction para determinar qual ação deverá ser instanciada para fazer o trabalho. No caso deste exemplo, a rota site/say será resolvida como a classe de controlador SiteController e a ação say. Como resultado, o método SiteController::actionSay() será chamado para tratar a requisição.
*/
    public function actionSay($message = 'Mesagem Padrão')
    {
        return $this->render('say', ['message' => $message]);
    }

/*
A primeira ação cria um objeto EntryForm. Ele, então, tenta popular o modelo (model) com os dados vindos do $_POST, fornecidos pelo yii\web\Request::post() no Yii. Se o modelo (model) for populado com sucesso (por exemplo, se o usuário enviar o formulário HTML), a ação chamará o validate() para certificar-se que os valores fornecidos são válidos.

Obs: A expressão Yii::$app representa a instância da aplicação, que é globalmente acessível via singleton. Também é um service locator que fornece componentes tais como request, response, db, etc...
*/

    public function actionEntry()
    {
        $model = new EntryForm();
/*
Se você tiver um objeto EntryForm populado com dados fornecidos pelo usuário, você pode chamar o validate() para iniciar as rotinas de validação dos dados. A validação dos dados falhar, a propriedade hasErrors será definida como true e você pode saber quais erros ocorrerão pela validação através de errors.
*/
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // dados válidos recebidos pelo $model

            // fazer alguma coisa aqui sobre $model ...

            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // Ou a página é exibida inicialmente ou existe algum erro de validação
            return $this->render('entry', ['model' => $model]);
        }
    }

//#########################################################

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
