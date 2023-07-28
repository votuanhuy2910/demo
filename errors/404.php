<html>
<style>
    .page_404 {
        padding: 40px 0;
        background: #fff;
        font-family: 'Poppins', sans-serif;
    }

    .page_404 img {
        width: 100%;
    }

    .four_zero_four_bg {
        background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
        height: 400px;
        background-position: center;
    }


    .four_zero_four_bg h1 {
        font-size: 80px;
    }

    .four_zero_four_bg h3 {
        font-size: 80px;
    }

    .link_404 {
        color: #fff !important;
        padding: 10px 20px;
        background: #39ac31;
        margin: 20px 0;
        display: inline-block;
    }

    .contant_box_404 {
        font-size: 18px;
        margin-top: -50px;
    }

    .error-container {
        text-align: center;
        font-size: 80px;
        font-family: 'Catamaran', sans-serif;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .error-container>span {
        display: inline-block;
        line-height: 0.7;
        position: relative;
        color: #FFB485;
    }

    .error-container>span {
        display: inline-block;
        position: relative;
        vertical-align: middle;
    }

    .error-container>span:nth-of-type(1) {
        color: #D1F2A5;
        animation: colordancing 4s infinite;
    }

    .error-container>span:nth-of-type(3) {
        color: #F56991;
        animation: colordancing2 4s infinite;
    }

    .error-container>span:nth-of-type(2) {
        width: 80px;
        height: 80px;
        border-radius: 999px;
    }

    .error-container>span:nth-of-type(2):before,
    .error-container>span:nth-of-type(2):after {
        border-radius: 0%;
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: inherit;
        height: inherit;
        border-radius: 999px;
        box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
            inset 0 30px 0 rgba(239, 250, 180, 0.4),
            inset -30px 0 0 rgba(255, 196, 140, 0.4),
            inset 0 -30px 0 rgba(245, 105, 145, 0.4);
        animation: shadowsdancing 4s infinite;
    }

    .error-container>span:nth-of-type(2):before {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .screen-reader-text {
        position: absolute;
        top: -9999em;
        left: -9999em;
    }

    @keyframes shadowsdancing {
        0% {
            box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
                inset 0 30px 0 rgba(239, 250, 180, 0.4),
                inset -30px 0 0 rgba(255, 196, 140, 0.4),
                inset 0 -30px 0 rgba(245, 105, 145, 0.4);
        }

        25% {
            box-shadow: inset 30px 0 0 rgba(245, 105, 145, 0.4),
                inset 0 30px 0 rgba(209, 242, 165, 0.4),
                inset -30px 0 0 rgba(239, 250, 180, 0.4),
                inset 0 -30px 0 rgba(255, 196, 140, 0.4);
        }

        50% {
            box-shadow: inset 30px 0 0 rgba(255, 196, 140, 0.4),
                inset 0 30px 0 rgba(245, 105, 145, 0.4),
                inset -30px 0 0 rgba(209, 242, 165, 0.4),
                inset 0 -30px 0 rgba(239, 250, 180, 0.4);
        }

        75% {
            box-shadow: inset 30px 0 0 rgba(239, 250, 180, 0.4),
                inset 0 30px 0 rgba(255, 196, 140, 0.4),
                inset -30px 0 0 rgba(245, 105, 145, 0.4),
                inset 0 -30px 0 rgba(209, 242, 165, 0.4);
        }

        100% {
            box-shadow: inset 30px 0 0 rgba(209, 242, 165, 0.4),
                inset 0 30px 0 rgba(239, 250, 180, 0.4),
                inset -30px 0 0 rgba(255, 196, 140, 0.4),
                inset 0 -30px 0 rgba(245, 105, 145, 0.4);
        }
    }

    @keyframes colordancing {
        0% {
            color: #D1F2A5;
        }

        25% {
            color: #F56991;
        }

        50% {
            color: #FFC48C;
        }

        75% {
            color: #EFFAB4;
        }

        100% {
            color: #D1F2A5;
        }
    }

    @keyframes colordancing2 {
        0% {
            color: #FFC48C;
        }

        25% {
            color: #EFFAB4;
        }

        50% {
            color: #D1F2A5;
        }

        75% {
            color: #F56991;
        }

        100% {
            color: #FFC48C;
        }
    }
</style>

<body>
    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="col-sm-12 col-sm-offset-1 text-center">
                        <section class="error-container">
                            <span>4</span>
                            <span><span class="screen-reader-text">0</span></span>
                            <span>4</span>
                        </section>

                        <div class="four_zero_four_bg"></div>

                        <div class="contant_box_404">
                            <h3 class="h2">
                                Look like you're lost
                            </h3>

                            <p>the page you are looking for not avaible!</p>

                            <a href="../admin/login.php" class="link_404">Go to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>