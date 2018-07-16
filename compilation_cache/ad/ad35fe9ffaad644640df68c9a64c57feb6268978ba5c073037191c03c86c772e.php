<?php

/* login.html */
class __TwigTemplate_7d203b63d1a43ae07bb534340c2769b50c2a96df10d2b4fd32fede135a72970a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Home</title>
     <link rel=\"stylesheet\" href=\"css/fontawesome-all.css\">
    <link rel=\"stylesheet\" href=\"css/main.css\">
</head>
<body>
    <section  class =\"header\">   
         <div class =\"Logo\">
         <img src=\"img/Logo.png\" alt =\"Logo\">

         </div>
         <div class = \"Menu\">
         <ul>
             <li><a href =\"\">Расходы</a></li>
             <li><a href =\"\">Планирование бюджета</a></li>
             <li><a href =\"\">Статистика</a></li>
             <li><a href =\"\">Выход</a></li>
         </ul>

         </div>
      
    </section>
    
    
    <section class=\"body\">
          
          <div class =\"part0\">
                <div class=\"circleMain\"></div>
          </div>
          
           <div class=\"part1\">
                <div class=\"circles purple\">
               
                 <i class=\"fa fa-money-bill-wave\"></i>
  <!--                    <p>Депозит</p>-->
                </div>
                
                <div class=\"circles yellow\">
                    <i class=\"fa fa-credit-card\"></i>
<!--                    <p>Кредит</p>-->
                </div>
           </div>
           
           <div class=\"part2\">
                <div class=\"circles green\">
                  
                    <i class=\"fa fa-tshirt\"></i>
<!--                    <p>Одежда</p>-->
                </div>
                
        
                <div class=\"circles blue\">
               
                     <i class=\"fa fa-home\"></i>
<!--                    <p>Коммунальные платежи</p>-->
                </div>
                <div class=\"circles pink\">
                     <i class=\"fa fa-utensils\"></i>
<!--                    <p>Еда</p>-->
                </div>
     
           </div> 
            
           <div class =\"part3\">
                <div class=\"circles grey\">
               
                     <i class=\"fa fa-car\"></i>
                    
<!--                    <p>Транспорт</p>-->
                </div>
                <div class=\"circles greenlight\">
                
                     <i class=\"fa fa-film\"></i>
                
<!--                    <p>Развлечения</p>-->
                </div>
                <div class=\"circles orange\">
               
                     <i class=\"fa fa-prescription-bottle-alt\"></i>
<!--                    <p>Медицинские расходы</p>-->
                </div>
                <div class=\"circles red\">
               
                     <i class=\"fa fa-ellipsis-h\"></i>
<!--                    <p>Мелкие расходы</p>-->
                </div>
           </div>
          
            
    </section>
   
    
    
    
    <section class=\"footer\"></section>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.html", "C:\\OSPanel\\domains\\project.loc\\public\\login.html");
    }
}
