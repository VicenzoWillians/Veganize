<template id="my-template-contact">
  <swal-title>
    Oops...
  </swal-title>
  <swal-icon type="error" color="red"></swal-icon>
  <swal-html>
    Algo deu errado! Faça o login para entrar em contato.
  </swal-html>
  <swal-button type="confirm" color="#00CBA9">
    Fechar
  </swal-button>
  <swal-footer>
    <a class="template" 
      href="login.php">
      Fazer login
    </a>
  </swal-footer>
  <swal-param name="allowEscapeKey" value="true" />
  <swal-param
    name="customClass"
    value='{ "popup": "my-popup" }' />
</template>

<template id="my-template-recipe">
  <swal-title>
    Oops...
  </swal-title>
  <swal-icon type="error" color="red"></swal-icon>
  <swal-html>
    Algo deu errado! Você atingiu o limite de ingredientes.
  </swal-html>
  <swal-button type="confirm" color="#00CBA9">
    Fechar
  </swal-button>
  <swal-param name="allowEscapeKey" value="true" />
  <swal-param
    name="customClass"
    value='{ "popup": "my-popup" }' />
</template>

<template id="my-template-submit-recipe">
  <swal-title>
    Oops...
  </swal-title>
  <swal-icon type="error" color="red"></swal-icon>
  <swal-html>
    Algo deu errado! Faça o login para enviar uma receita.
  </swal-html>
  <swal-button type="confirm" color="#00CBA9">
    Fechar
  </swal-button>
  <swal-footer>
    <a class="template" 
      href="login.php">
      Fazer login
    </a>
  </swal-footer>
  <swal-param name="allowEscapeKey" value="true" />
  <swal-param
    name="customClass"
    value='{ "popup": "my-popup" }' />
</template>

<template id="my-template-success-contact">
  <swal-title>
    Mensagem enviada com sucesso!
  </swal-title>
  <swal-icon type="success" color="green"></swal-icon>
  <swal-html>
    Nossa equipe entrará em contato com você caso necessário. Agradecemos o seu feedback :)
  </swal-html>
  <swal-button type="confirm" color="#00CBA9">
    Fechar
  </swal-button>
  <swal-param name="allowEscapeKey" value="true" />
  <swal-param
    name="customClass"
    value='{ "popup": "my-popup" }' />
</template>

<template id="my-template-success-recipe">
  <swal-title>
    Receita enviada com sucesso!
  </swal-title>
  <swal-icon type="success" color="green"></swal-icon>
  <swal-html>
    Vamos analisar sua receita e em breve estará em nosso site :)
  </swal-html>
  <swal-button type="confirm" color="#00CBA9">
    Fechar
  </swal-button>
  <swal-param name="allowEscapeKey" value="true" />
  <swal-param
    name="customClass"
    value='{ "popup": "my-popup" }' />
</template>

<template id="my-template-success-register">
  <swal-title>
    Usuário cadastrado com sucesso!
  </swal-title>
  <swal-icon type="success" color="green"></swal-icon>
  <swal-button type="confirm" color="#00CBA9">
    Fechar
  </swal-button>
  <swal-param name="allowEscapeKey" value="true" />
  <swal-param
    name="customClass"
    value='{ "popup": "my-popup" }' />
</template>

<template id="my-template-error-register">
  <swal-title>
    Oops... Algo deu errado! 
  </swal-title>
  <swal-icon type="error" color="red"></swal-icon>
  <swal-html>
    Não foi possível concluir o cadastro. Verfique os dados ou tente novamente mais tarde.
  </swal-html>
  <swal-button type="confirm" color="#00CBA9">
    Fechar
  </swal-button>
  <swal-param name="allowEscapeKey" value="true" />
  <swal-param
    name="customClass"
    value='{ "popup": "my-popup" }' />
</template>