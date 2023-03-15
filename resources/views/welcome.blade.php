<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{

        }
        .img1 {
            background-image: url('https://blogs.uninter.edu.mx/ESCAT/wp-content/uploads/2020/06/69789.jpg');
            background-size:100%;
            opacity: 40%;
            max-width: 100%;
            height: 840px;
        }

        .housevop {
            /* HouseVOP */


            position: absolute;
            width: 134px;
            height: 37px;
            left: 100px;
            top: 30px;

            font-family: 'Post No Bills Jaffna SemiBold';
            font-style: normal;
            font-weight: 600;
            font-size: 36px;
            line-height: 54px;

            color: #FFFFFF;
        }

        .housevop2 {
            /* HouseVOP */


            position: absolute;
            height: 37px;
            left: 105px;
            top: 85px;

            font-family: 'Post No Bills Jaffna SemiBold';
            font-style: normal;
            font-weight: 600;
            font-size: 25px;
            line-height: 54px;

            color: #FFFFFF;
        }

        .text2 {
            /* ЖИЛОЙ КОМПЛЕКС */


            position: absolute;
            width: 134px;
            height: 14px;
            left: 405px;
            top: 82px;

            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 14px;
            /* identical to box height */

            letter-spacing: 0.12em;

            color: #FFFFFF;
        }

        .text3 {
            /* О комплексе */
            text-decoration: none;

            position: absolute;
            width: 110px;
            height: 16px;
            left: 974px;
            top: 55px;

            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 16px;
            letter-spacing: 0.05em;

            color: #FFFFFF;
        }

        .text4 {
            /* Район */


            position: absolute;
            width: 50px;
            height: 16px;
            left: 1106px;
            top: 55px;

            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 16px;
            letter-spacing: 0.05em;

            color: #FFFFFF;

        }

        .text5 {
            /* Каталог квартир */


            position: absolute;
            width: 140px;
            height: 16px;
            left: 1190px;
            top: 55px;

            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 16px;
            letter-spacing: 0.05em;

            color: #FFFFFF;

        }

        .text6 {
            /* Ипотека */


            position: absolute;
            width: 60px;
            height: 16px;
            left: 1349px;
            top: 55px;

            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 16px;
            letter-spacing: 0.05em;

            color: #FFFFFF;

        }

        .text7 {
            /* Контакты */


            position: absolute;
            width: 70px;
            height: 16px;
            left: 1449px;
            top: 55px;

            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 16px;
            letter-spacing: 0.05em;

            color: #FFFFFF;

        }

        .text8 {
            /* Жилой комплекс в историческом центре */


            position: absolute;
            width: 556px;
            height: 109px;
            left: 480px;
            top: 296px;

            font-family: 'Playfair Display';
            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 64px;
            text-align: center;

            /* accent */

            color: #D4C17F;

        }

        body {
            /* Templates #8. More on Figma.info */


            position: relative;
            width: 100%;
            height: 4718px;

            /* dark */

            background: #242B33;
        }

        .cursor1 {
            /* Vector */

            position: absolute;
            left: 43%;
            right: 20.66%;
            top: 10%;
            bottom: 0%;

        }

        .cursor2 {
            /* Vector */


            position: absolute;
            left: 43.53%;
            right: 47.08%;
            top: 10.2%;
            bottom: 60.3%;

        }

        .text9 {
            /* Наб. реки Фонтанки 10-15 */


            position: absolute;
            width: 180px;
            height: 21px;
            left: 325px;
            top: 745px;

            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 21px;
            text-align: center;

            color: #FFFFFF;

        }

        .text10 {
            /* 8 (812) 123-45-67 */


            position: absolute;
            width: 180px;
            height: 21px;
            left: 1020px;
            top: 745px;

            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 21px;
            text-align: center;

            color: #FFFFFF;

        }

        .number {
            /* Vector */


            position: absolute;
            left: 46.8%;
            right: 0%;
            top: 15.8%;
            bottom: 0%;

        }

        .plusi {
            /* testimonials */


            position: absolute;
            width: 794px;
            height: 180px;
            left: 400px;
            top: 960px;

        }

        /* .header-page .logo {
    font-family: PostNoBillsJaffna-SemiBold;
    font-weight: 600;
    font-size: 27px;
    margin-bottom: -20px;
    line-height: 0.5;
}
a {
    color: #ffffff;
    text-decoration: none;
    font-size: 1em;
    position: relative;
    transition: all 0.6s;
}
h1 {
    font-size: 2em;
    margin: 0.67em 0;
}
.header-page .logo span {
    text-transform: uppercase;
}
.header-page .logo::after {
    content: "жилой комплекс";
    font-family: "Raleway", sans-serif;
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 0.4em;
} */
.wrapper{
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    font-family: "Raleway", sans-serif;
    font-style: normal;
    font-weight: normal;
    color: #ffffff;
    padding-inline-start: 0px;
    margin: 0 auto;
    width: 1170px;
    display: flex;
    left: -100px;
}
.block{
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    font-family: "Raleway", sans-serif;
    font-style: normal;
    font-weight: normal;
    color: #ffffff;
    padding-inline-start: 0px;
    margin: 0 auto;
    max-width: 200px;
    text-align: center;
    display: block;
}
.block__img{
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    font-family: "Raleway", sans-serif;
    font-style: normal;
    font-weight: normal;
    color: #ffffff;
    text-align: center;
    padding-inline-start: 0px;
    margin-top: 120px;
}
.block__text{
    -webkit-text-size-adjust: 100%;
    font-family: "Raleway", sans-serif;
    font-style: normal;
    color: #ffffff;
    padding-inline-start: 0px;
    margin-top: 50px;
    margin-bottom: 120px;
    font-weight: 300;
    font-size: 20px;
    line-height: 27px;
    text-align: center;
}
    </style>
    <title>HouseVOP</title>
    <div class="img1">
        </div>

        <a href="">
            <h1 class="housevop">HouseVOP</h1>
        </a>
        <a href="">
            <h1 class="housevop2">жилой комплекс</h1>
        </a>

        <img class="text2" src="https://srv2.imgonline.com.ua/result_img/imgonline-com-ua-Resize-6Cq8RLa3hP3P.png" alt="">
        <a href="">
            <h2 class="text3">О комплексе</h2>
        </a>
        <a href="">
            <h2 class="text4">Район</h2>
        </a>
        <a href="">
            <h2 class="text5">Каталог квартир</h2>
        </a>
        <a href="">
            <h2 class="text6">Ипотека</h2>
        </a>
        <a href="">
            <h2 class="text7">Контакты</h2>
        </a>
</head>

<body>
    <div class="content">
        <h1 class="text8">Жилой комплекс <br>в историческом центре</h1> <img class="cursor1" src="https://srv2.imgonline.com.ua/result_img/imgonline-com-ua-Resize-h8PLAfWu6t.png" alt="">
        <img class="cursor2" src="https://srv4.imgonline.com.ua/result_img/imgonline-com-ua-Resize-XtFyiWdH3ApR.jpg" alt="">
        <span class="text9">g.Ufa Kirova 65/2</span>
        <span class="text10">8 (982) 298-88-07</span>
        <div class="wrapper">
            <div class="block">
                <div class="block__img"><img src="https://kostiukpavlo.github.io/housevop/img/Group_park.png" alt=""></div>
                <div class="block__text">Рядом исторические парки и скверы</div>
            </div>
            <div class="block">
                <div class="block__img">
                    <img src="https://kostiukpavlo.github.io/housevop/img/Group_building.png" alt="">
                </div>
                <div class="block__text">Полностью обустроенный</div>
            </div>
            <div class="block">
                <div class="block__img">
                    <img src="https://kostiukpavlo.github.io/housevop/img/Group_fountain.png" alt="">
                </div>
                <div class="block__text">10 фонтанов на территории</div>
            </div>
            <div class="block">
                <div class="block__img">
                    <img src="https://kostiukpavlo.github.io/housevop/img/Group_bicycle.png" alt="">
                </div>
                <div class="block__text">6 км велодорожек</div>
            </div>
        </div>
    </div>
</body>

</html>
