<style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap");



    .cont {
        position: relative;
        max-width: 90%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .cont .cartao {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 100px 0;

    }

    @media only screen and (max-width: 62.5em) {
        .cont .cartao {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            max-width: 350px;
            margin: 25px;
        }
    }

    .cont .cartao:nth-child(odd) {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
    }

    @media only screen and (max-width: 62.5em) {
        .cont .cartao:nth-child(odd) {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }
    }

    .cont .cartao:nth-child(even) {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: reverse;
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
        text-align: right;
    }

    @media only screen and (max-width: 62.5em) {
        .cont .cartao:nth-child(even) {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }
    }

    .cont .cartao:nth-child(even) .imgbox {
        left: -100px;
    }

    @media only screen and (max-width: 62.5em) {
        .cont .cartao:nth-child(even) .imgbox {
            left: 0;
        }
    }

    .cont .cartao:nth-child(even) .contentbox {
        right: -25px;
        padding: 20px 150px 20px 60px;
    }

    @media only screen and (max-width: 62.5em) {
        .cont .cartao:nth-child(even) .contentbox {
            right: 0;
            padding: 30px;
            padding-top: 50px;
        }
    }

    .cont .cartao .imgbox {
        position: relative;
        width: 300px;
        left: 100px;
        z-index: 1;
        border: #1f3401 solid 5px;
        border-radius: 100%;
    }

    @media only screen and (max-width: 62.5em) {
        .cont .cartao .imgbox {
            width: 70%;
            bottom: -30px;
            left: 0;
        }
    }

    .cont .cartao .imgbox img {
        position: relative;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        border-radius: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .cont .cartao .contentbox {
        position: relative;
        right: 25px;
        width: 700px;
        height: 400px;
        background: #1f3401;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding: 20px 60px 20px 150px;
        border-radius: 20px;

    }

    @media only screen and (max-width: 62.5em) {
        .cont .cartao .contentbox {
            width: 100%;
            height: auto;
            right: 0;
            padding: 30px;
            text-align: center;
        }
    }

    .cont .cartao .contentbox::before {
        content: '';
        position: absolute;
        top: -50px;
        bottom: -50px;
        left: 0;
        right: 0;
        background: #1f3401;
        z-index: -1;
    }

    @media only screen and (max-width: 62.5em) {
        .cont .cartao .contentbox::before {
            top: 0;
            bottom: 0;
        }
    }

    .cont .cartao .contentbox h2 {
        font-size: 30px;
        color: #fff;
    }

    .cont .cartao .contentbox p {
        margin-top: 10px;
        color: #fff;
    }
</style>

<div class="cont carde mx-auto my-5">

    <div class="p-4">
        <img src="./src/img/sobreEquipe.jpg " class="w-25 mb-4 mx-auto d-block ">
        <p class=" text-center display-5" style="color:#3a4f1c;">
            Estamos nos esforçando, o trabalho é essencial.
        </p>
    </div>


    <div class="cartao mt-0">
        <div class="imgbox">
            <img src="src/img/Cris.png" alt="sunset">
        </div>
        <div class="contentbox">
            <div class="content">
                <h2>Agata</h2>
                <p> DESIGN GRAFICO/UX E ILUSTRAÇÃO </p>

            </div>
        </div>
    </div>
    <div class="cartao">
        <div class="imgbox">
            <img src="src/img/Felipe.png" alt="digha gate">
        </div>
        <div class="contentbox">
            <div class="content">
                <h2>Felipe Paterni</h2>
                <p>PROGRAMADOR/DESENVOLVEDOR BACK-END</p>

            </div>
        </div>
    </div>


</div>

<div class="cont carde mx-auto my-5">

    <div class="p-4">
        <img src="./src/img/sobreEquipe.jpg " class="w-25 mb-4 mx-auto d-block ">
        <p class=" text-center display-5" style="color:#3a4f1c;">
            NÃO SOMOS OS MELHORES, MAS PODEMOS SER MELHORES QUE ONTEM E POSTERIORMENTE.
        </p>
    </div>


    <div class="cartao mt-0">
        <div class="imgbox">
            <img src="src/img/Murilo.png" alt="sunset">
        </div>
        <div class="contentbox">
            <div class="content">
                <h2>Murilo Renan </h2>
                <p>PROGRAMADOR E ESCRITOR</p>

            </div>
        </div>
    </div>
    <div class="cartao">
        <div class="imgbox">
            <img src="src/img/Millena.png" alt="digha gate">
        </div>
        <div class="contentbox">
            <div class="content">
                <h2>Millena</h2>
                <p> DESIGN GRAFICO E ILUSTRAÇÃO </p>

            </div>
        </div>
    </div>
    <div class="cartao">
        <div class="imgbox">
            <img src="src/img/Jose.png" alt="digha gate">
        </div>
        <div class="contentbox">
            <div class="content">
                <h2>José</h2>
                <p>PROGRAMADOR</p>

            </div>
        </div>
    </div>

</div>

<div class="fimImg text-center "></div>