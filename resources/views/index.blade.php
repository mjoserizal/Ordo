<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Green Haven</title>

        {{-- STYLE CSS --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        {{-- END STYLE CSS --}}

    </head>

    <body id="home">
        @include("components.navbar")
        <main>
            <div class="container">
                {{-- HERO SECTION --}}
                <section class="hero d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0" id="hero">
                    <div class="row align-items-center">
                        <div
                            style="width: 729px; height: 686px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                            <div
                                style="height: 437px; padding-left: 70px; padding-right: 70px; padding-top: 50px; padding-bottom: 50px; flex-direction: column; justify-content: center; align-items: flex-start; gap: 40px; display: flex">
                                <div
                                    style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 16px; display: flex">
                                    <div
                                        style="padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 10px; background: white; border-radius: 9000px; border: 1px #DDDDDD solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                        <div
                                            style="text-align: center; color: black; font-size: 16px; font-family: Outfit; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Green Haven Project - Mangrove</div>
                                    </div>
                                    <div
                                        style="color: black; font-size: 40px; font-family: Outfit; font-weight: 700; line-height: 50px; word-wrap: break-word">
                                        Green Horizons Await, Join Us in<br />Planting 10,000 Mangroves!</div>
                                </div>
                                <div
                                    style="width: 589px; padding-top: 29px; padding-bottom: 31px; padding-left: 35px; padding-right: 34px; background: white; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.05); border-radius: 20px; overflow: hidden; border: 1px #EEEEEE solid; justify-content: center; align-items: center; display: inline-flex">
                                    <div
                                        style="flex: 1 1 0; align-self: stretch; justify-content: center; align-items: center; gap: 30px; display: inline-flex">
                                        <div
                                            style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 17px; display: inline-flex">
                                            <div
                                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                                <div
                                                    style="justify-content: flex-start; align-items: center; gap: 11px; display: flex">
                                                    <img style="width: 40px; height: 40px"
                                                        src="{{ asset("assets/img/logo/mangrove.png") }}" />
                                                    <div style="text-align: center"><span
                                                            style="color: #336913; font-size: 30px; font-family: Inter; font-weight: 700; line-height: 45px; word-wrap: break-word">5,690</span><span
                                                            style="color: #1D4009; font-size: 16px; font-family: Inter; font-weight: 500; line-height: 24px; word-wrap: break-word">/
                                                            10,000 Pohon</span></div>
                                                </div>
                                                <div
                                                    style="padding-left: 25px; padding-right: 25px; padding-top: 10px; padding-bottom: 10px; background: #336913; border-radius: 9000px; border: 1px solid; justify-content: center; align-items: center; gap: 5px; display: flex">
                                                    <div
                                                        style="text-align: center; color: white; font-size: 15px; font-family: Outfit; font-weight: 600; line-height: 22.50px;">
                                                        Support Our Mission</div>
                                                </div>
                                            </div>
                                            <div
                                                style="height: 15px; padding-right: 300px; background: #EFF7EF; border-radius: 900px; justify-content: flex-start; align-items: center; display: inline-flex">
                                                <div
                                                    style="width: 220px; height: 15px; background: #336913; border-radius: 900px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img style="align-self: stretch; height: 249px"
                                src="{{ asset("assets/img/logo/Rectangle1.png") }}" />
                        </div>
                    </div>
                    <div
                        style="width: 711px; height: 686px; padding-top: 32px; padding-bottom: 24px; padding-left: 42px; padding-right: 42px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 28px; display: inline-flex">
                        <div
                            style="align-self: stretch; height: 101px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 14px; display: flex">
                            <div
                                style="align-self: stretch; height: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24px; display: flex">
                                <div
                                    style="color: black; font-size: 32px; font-family: Outfit; font-weight: 700; line-height: 40px; word-wrap: break-word">
                                    Leaderboard</div>
                            </div>
                            <div
                                style="justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                                <div
                                    style="padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; background: white; border-radius: 9000px; border: 1px #85BB50 solid; justify-content: center; align-items: center; gap: 10px; display: flex">
                                    <div
                                        style="text-align: center; color: #2D9444; font-size: 18px; font-family: Outfit; font-weight: 600; line-height: 27px; word-wrap: break-word">
                                        Most Donation</div>
                                </div>
                                <div
                                    style="padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; border-radius: 9000px; border: 1px #DDDDDD solid; justify-content: center; align-items: center; gap: 10px; display: flex">
                                    <div
                                        style="text-align: center; color: #888888; font-size: 18px; font-family: Outfit; font-weight: 500; line-height: 27px; word-wrap: break-word">
                                        Most Recent</div>
                                </div>
                            </div>
                        </div>
                        <div
                            style="align-self: stretch; flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: flex">
                            <div style="align-self: stretch; height: 0px; border: 1px #EEEEEE solid"></div>
                            <div
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="width: 48px; height: 48px; background: #336913; border-radius: 70px; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                        <div
                                            style="color: white; font-size: 18px; font-family: Outfit; font-weight: 700; line-height: 22.50px; word-wrap: break-word">
                                            01</div>
                                    </div>
                                    <div style="justify-content: center; align-items: center; gap: 8px; display: flex">
                                        <div
                                            style="justify-content: center; align-items: center; gap: 10px; display: flex">
                                            <img style="width: 60px; height: 60px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                        </div>
                                        <div
                                            style="flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div
                                                style="text-align: center; color: black; font-size: 12px; font-family: Outfit; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                                Mangrove Maven</div>
                                            <div
                                                style="text-align: center; color: black; font-size: 20px; font-family: Outfit; font-weight: 700; line-height: 30px; word-wrap: break-word">
                                                Budi Hartanto</div>
                                        </div>
                                    </div>
                                </div>
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="justify-content: flex-start; align-items: center; gap: 8.25px; display: flex">
                                        <img style="width: 30px; height: 30px"
                                            src="{{ asset("assets/img/logo/mangrove.png") }}" />
                                        <div style="text-align: center"><span
                                                style="color: #336913; font-size: 22.50px; font-family: Inter; font-weight: 700; line-height: 33.75px; word-wrap: break-word">350</span><span
                                                style="color: #336913; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                                Pohon</span></div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; height: 0px; border: 1px #EEEEEE solid"></div>
                            <div
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="width: 48px; height: 48px; background: #336913; border-radius: 70px; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                        <div
                                            style="color: white; font-size: 18px; font-family: Outfit; font-weight: 700; line-height: 22.50px; word-wrap: break-word">
                                            02</div>
                                    </div>
                                    <div style="justify-content: center; align-items: center; gap: 8px; display: flex">
                                        <div
                                            style="justify-content: center; align-items: center; gap: 10px; display: flex">
                                            <img style="width: 60px; height: 60px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                        </div>
                                        <div
                                            style="flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div
                                                style="text-align: center; color: black; font-size: 12px; font-family: Outfit; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                                Mangrove Maven</div>
                                            <div
                                                style="text-align: center; color: black; font-size: 20px; font-family: Outfit; font-weight: 700; line-height: 30px; word-wrap: break-word">
                                                Dewi Sartika</div>
                                        </div>
                                    </div>
                                </div>
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="justify-content: flex-start; align-items: center; gap: 8.25px; display: flex">
                                        <img style="width: 30px; height: 30px"
                                            src="{{ asset("assets/img/logo/mangrove.png") }}" />
                                        <div style="text-align: center"><span
                                                style="color: #336913; font-size: 22.50px; font-family: Inter; font-weight: 700; line-height: 33.75px; word-wrap: break-word">330</span><span
                                                style="color: #336913; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                                Pohon</span></div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; height: 0px; border: 1px #EEEEEE solid"></div>
                            <div
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="width: 48px; height: 48px; background: #336913; border-radius: 70px; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                        <div
                                            style="color: white; font-size: 18px; font-family: Outfit; font-weight: 700; line-height: 22.50px; word-wrap: break-word">
                                            03</div>
                                    </div>
                                    <div style="justify-content: center; align-items: center; gap: 8px; display: flex">
                                        <div
                                            style="background-image: url({{ asset("assets/img/logo/planet-earth.png") }}); justify-content: center; align-items: center; gap: 10px; display: flex">
                                            <img style="width: 60px; height: 60px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                        </div>
                                        <div
                                            style="flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div
                                                style="text-align: center; color: black; font-size: 12px; font-family: Outfit; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                                Mangrove Maven</div>
                                            <div
                                                style="text-align: center; color: black; font-size: 20px; font-family: Outfit; font-weight: 700; line-height: 30px; word-wrap: break-word">
                                                Eko Wahyudi</div>
                                        </div>
                                    </div>
                                </div>
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="justify-content: flex-start; align-items: center; gap: 8.25px; display: flex">
                                        <img style="width: 30px; height: 30px"
                                            src="{{ asset("assets/img/logo/mangrove.png") }}" />
                                        <div style="text-align: center"><span
                                                style="color: #336913; font-size: 22.50px; font-family: Inter; font-weight: 700; line-height: 33.75px; word-wrap: break-word">200</span><span
                                                style="color: #336913; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                                Pohon</span></div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; height: 0px; border: 1px #EEEEEE solid"></div>
                            <div
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="width: 48px; height: 48px; background: #85BB50; border-radius: 70px; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                        <div
                                            style="color: white; font-size: 18px; font-family: Outfit; font-weight: 700; line-height: 22.50px; word-wrap: break-word">
                                            04</div>
                                    </div>
                                    <div style="justify-content: center; align-items: center; gap: 8px; display: flex">
                                        <div
                                            style="justify-content: center; align-items: center; gap: 10px; display: flex">
                                            <img style="width: 60px; height: 60px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                        </div>
                                        <div
                                            style="flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div
                                                style="text-align: center; color: black; font-size: 12px; font-family: Outfit; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                                Guardian of the Grove</div>
                                            <div
                                                style="text-align: center; color: black; font-size: 20px; font-family: Outfit; font-weight: 700; line-height: 30px; word-wrap: break-word">
                                                Rina Kartika</div>
                                        </div>
                                    </div>
                                </div>
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="justify-content: flex-start; align-items: center; gap: 8.25px; display: flex">
                                        <img style="width: 30px; height: 30px"
                                            src="{{ asset("assets/img/logo/mangrove.png") }}" />
                                        <div style="text-align: center"><span
                                                style="color: #336913; font-size: 22.50px; font-family: Inter; font-weight: 700; line-height: 33.75px; word-wrap: break-word">190</span><span
                                                style="color: #336913; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                                Pohon</span></div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; height: 0px; border: 1px #EEEEEE solid"></div>
                            <div
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="width: 48px; height: 48px; background: #A7CC05; border-radius: 70px; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                        <div
                                            style="color: white; font-size: 18px; font-family: Outfit; font-weight: 700; line-height: 22.50px; word-wrap: break-word">
                                            05</div>
                                    </div>
                                    <div style="justify-content: center; align-items: center; gap: 8px; display: flex">
                                        <div
                                            style="justify-content: center; align-items: center; gap: 10px; display: flex">
                                            <img style="width: 60px; height: 60px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                        </div>
                                        <div
                                            style="flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div
                                                style="text-align: center; color: black; font-size: 12px; font-family: Outfit; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                                Guardian of the Grove</div>
                                            <div
                                                style="text-align: center; color: black; font-size: 20px; font-family: Outfit; font-weight: 700; line-height: 30px; word-wrap: break-word">
                                                Agus Prasetyo</div>
                                        </div>
                                    </div>
                                </div>
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="justify-content: flex-start; align-items: center; gap: 8.25px; display: flex">
                                        <img style="width: 30px; height: 30px"
                                            src="{{ asset("assets/img/logo/mangrove.png") }}" />
                                        <div style="text-align: center"><span
                                                style="color: #336913; font-size: 22.50px; font-family: Inter; font-weight: 700; line-height: 33.75px; word-wrap: break-word">140</span><span
                                                style="color: #336913; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                                Pohon</span></div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; height: 0px; border: 1px #EEEEEE solid"></div>
                            <div
                                style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="width: 48px; height: 48px; background: #A7CC05; border-radius: 70px; overflow: hidden; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                        <div
                                            style="color: white; font-size: 18px; font-family: Outfit; font-weight: 700; line-height: 22.50px; word-wrap: break-word">
                                            06</div>
                                    </div>
                                    <div style="justify-content: center; align-items: center; gap: 8px; display: flex">
                                        <div
                                            style="justify-content: center; align-items: center; gap: 10px; display: flex">
                                            <img style="width: 60px; height: 60px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                        </div>
                                        <div
                                            style="flex-direction: column; justify-content: center; align-items: flex-start; display: inline-flex">
                                            <div
                                                style="text-align: center; color: black; font-size: 12px; font-family: Outfit; font-weight: 400; line-height: 18px; word-wrap: break-word">
                                                Mangrove Master</div>
                                            <div
                                                style="text-align: center; color: black; font-size: 20px; font-family: Outfit; font-weight: 700; line-height: 30px; word-wrap: break-word">
                                                Irfan Setiawan</div>
                                        </div>
                                    </div>
                                </div>

                                <div style="justify-content: center; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="justify-content: flex-start; align-items: center; gap: 8.25px; display: flex">
                                        <img style="width: 30px; height: 30px"
                                            src="{{ asset("assets/img/logo/mangrove.png") }}" />
                                        <div style="text-align: center"><span
                                                style="color: #336913; font-size: 22.50px; font-family: Inter; font-weight: 700; line-height: 33.75px; word-wrap: break-word">80</span><span
                                                style="color: #336913; font-size: 12px; font-family: Inter; font-weight: 500; line-height: 18px; word-wrap: break-word">
                                                Pohon</span></div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; height: 0px; border: 1px #EEEEEE solid"></div>
                        </div>
                    </div>
                </section>
                {{-- END FAQ SECTION --}}

            </div>
            <div
                style="width: 100%; height: 120px; margin-top: -120px; background: #F5F8FA; justify-content: center; align-items: center; display: flex;">
                <div
                    style="flex: 1 1 0; align-self: stretch; justify-content: center; align-items: center; gap: 70px; display: flex;">
                    <img style="width: 123.75px; height: 36px" src="{{ asset("assets/img/logo/jala.png") }}" />
                    <img style="width: 156.38px; height: 35.63px" src="{{ asset("assets/img/logo/fishery.png") }}" />
                    <img style="width: 166.77px; height: 35.63px" src="{{ asset("assets/img/logo/azarine.png") }}" />
                    <img style="width: 149.54px; height: 28.80px" src="{{ asset("assets/img/logo/kompas.png") }}" />
                    <img style="width: 157.30px; height: 40.50px" src="{{ asset("assets/img/logo/tribun.png") }}" />
                    <img style="width: 166.77px; height: 25.09px" src="{{ asset("assets/img/logo/jawapos.png") }}" />
                </div>
            </div>
            <div class="container">
                <section class="hero d-flex align-items-center py-4 py-lg-0 pb-xl-5 pb-xxl-0" id="hero">
                    <div class="row align-items-center">
                        <div
                            style="width: 1284px; height: 722px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 50px; display: inline-flex">
                            <div
                                style="align-self: stretch; height: 271px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                <div
                                    style="align-self: stretch; height: 271px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                                    <div
                                        style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                        <div style="display: flex; justify-content: center; align-items: center;">
                                            <div
                                                style="justify-content: flex-start; align-items: center; gap: 6.42px; display: inline-flex; margin-left: 30px;">
                                                <div style="width: 120px; height: 120px; position: relative">
                                                    <div
                                                        style="width: 120px; height: 120px; left: 0px; top: 0px; position: absolute">
                                                        <img style="width: 82.76px; height: 82.76px; left: 18.60px; top: 34.64px; position: absolute"
                                                            src="{{ asset("assets/img/logo/jci.png") }}" />
                                                    </div>
                                                </div>
                                                <div style="width: 120px; height: 120px; position: relative">
                                                    <div
                                                        style="width: 120px; height: 120px; left: 0px; top: 0px; position: absolute">
                                                        <img style="width: 82.76px; height: 82.76px; left: 18.60px; top: 34.64px; position: absolute"
                                                            src="{{ asset("assets/img/logo/green.png") }}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                            <div
                                                style="text-align: center; color: black; font-size: 40px; font-family: Outfit; font-weight: 700; line-height: 50px; word-wrap: break-word">
                                                About Green Haven Project</div>
                                            <div
                                                style="width: 900px; text-align: center; color: black; font-size: 18px; font-family: Outfit; font-weight: 300; line-height: 27px; word-wrap: break-word">
                                                The Green Haven Project - Mangrove aims to restore coastal ecosystems
                                                and raise awareness by planting mangroves and educating participants
                                                about the importance of these areas. This six-hour event will involve
                                                JCI members, local farmers, and students, focusing on combating beach
                                                erosion and promoting ESG values.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                style="position: relative; width: 1284px; justify-content: space-between; align-items: center; display: inline-flex">
                                <div
                                    style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                                    <img style="width: 620px; height: 344px; border-radius: 24px"
                                        src="{{ asset("assets/img/logo/BFR.png") }}" />
                                    <div
                                        style="text-align: center; color: black; font-size: 22px; font-family: Outfit; font-weight: 600; line-height: 33px; word-wrap: break-word">
                                        Before mangroves were planted
                                    </div>
                                </div>
                                <div
                                    style="width: 620px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 24px; display: inline-flex">
                                    <img style="width: 620px; height: 344px; border-radius: 24px"
                                        src="{{ asset("assets/img/logo/AFTR.png") }}" />
                                    <div
                                        style="text-align: center; color: black; font-size: 22px; font-family: Outfit; font-weight: 600; line-height: 33px; word-wrap: break-word">
                                        After mangroves were planted
                                    </div>
                                </div>
                                <div
                                    style="position: absolute; top: 120px; left: 50%; transform: translateX(-50%); background: white; width: 200px; height: 160px; padding: 10px; border-radius: 12px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); text-align: center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <img src="{{ asset("assets/img/logo/arrow.png") }}" alt="Transformation Image"
                                        style="margin-bottom: 10px; width: 100px; height: 100px;" />
                                    <div
                                        style="color: #2D9444; font-size: 16px; font-family: Outfit; font-weight: 700; line-height: 24px;">
                                        Transformation
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
                <section class="align-items-center" id="hero">
                    <div class="row align-items-center">
                        <div
                            style="width: 1440px; height: 870.37px;  background: #F5FAF8; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex; padding-right: 70px; padding-bottom: -100px;">
                            <div
                                style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 50px; display: flex">
                                <div
                                    style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                    <div
                                        style="text-align: center; color: #336913; font-size: 40px; font-family: Outfit; font-weight: 700; line-height: 50px; word-wrap: break-word">
                                        Event Summary</div>
                                    <div
                                        style="width: 700px; text-align: center; color: black; font-size: 18px; font-family: Outfit; font-weight: 300; line-height: 27px; word-wrap: break-word">
                                        We give you a brief overview of the event to give you a glimpse of what we're
                                        doing <br />in the Green Haven Project, download the detailed PDF to see how you
                                        can get involved</div>
                                </div>
                                <div
                                    style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 40px; display: flex;">
                                    <div
                                        style="width: 1284px; height: 367px; position: relative; background: white; border-radius: 44.24px; overflow: hidden; border: 1.01px solid;">
                                        <div
                                            style="left: 50.27px; top: 56.31px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10.05px; display: inline-flex;">
                                            <div
                                                style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex;">
                                                <div
                                                    style="color: #336913; font-size: 27.15px; font-family: Outfit; font-weight: 600; line-height: 40.72px; word-wrap: break-word;">
                                                    26/04/2024
                                                </div>
                                                <div
                                                    style="color: black; font-size: 30.16px; font-family: Outfit; font-weight: 700; line-height: 45.25px; word-wrap: break-word;">
                                                    08:00 - 11:00 WIB
                                                </div>
                                            </div>
                                            <div
                                                style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 24.13px; display: flex;">
                                                <div
                                                    style="width: 555.03px; color: #222222; font-size: 16.09px; font-family: Outfit; font-weight: 300; line-height: 21.72px; word-wrap: break-word;">
                                                    Join the impactful journey of planting mangroves, <br />where you'll
                                                    learn, collaborate with locals, earn recognition, <br />and share
                                                    your story through media coverage
                                                </div>
                                                <div
                                                    style="width: 561.06px; height: 0px; border: 1.01px #E2E2E2 solid;">
                                                </div>
                                                <div
                                                    style="padding: 10.05px 25.14px; background: #336913; border-radius: 9049.33px; border: 1.01px solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex;">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/vector.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                    <div
                                                        style="text-align: center; color: white; font-size: 15.08px; font-family: Outfit; font-weight: 600; line-height: 22.62px; word-wrap: break-word;">
                                                        View Event Details
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div
                                            style="width: 603.29px; height: 320.75px; left: 643.51px; top: 23.13px; position: absolute;">
                                            <img style="width: 603.29px; height: 320.75px; left: 0px; top: 0px; position: absolute; border-radius: 32.18px;"
                                                src="{{ asset("assets/img/logo/image5.png") }}" />

                                            <div
                                                style="position: absolute; right: 15px; top: 50%; transform: translateY(-10%); padding: 10px 20px; background: #336913; border-radius: 25px; border: 1px solid #336913; display: flex; align-items: center; justify-content: center;">
                                                <div
                                                    style="color: white; font-size: 15px; font-family: Outfit; font-weight: 600; line-height: 22.62px;">
                                                    >
                                                </div>
                                            </div>
                                            <div
                                                style="position: absolute; left: 15px; top: 46%; transform: translateY(-10%); padding: 10px 20px; background: #336913; border-radius: 25px; border: 1px solid #336913; display: flex; align-items: center; justify-content: center;">
                                                <div
                                                    style="color: white; font-size: 15px; font-family: Outfit; font-weight: 600; line-height: 22.62px;">
                                                    < </div>
                                                </div>
                                            </div>
                                            <div
                                                style="justify-content: flex-start; align-items: flex-start; gap: 33.46px; display: inline-flex;">
                                                <!-- Content for additional sections -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                </section>
            </div>
            <div class="container">
                <section class=" align-items-center " id="hero">
                    <div class="row align-items-center">
                        <div
                            style="width: 1440px; height: 1655.81px; padding-right: 100px; padding-top: 70px; padding-bottom: 70px; background: white; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 50px; display: inline-flex">
                            <div
                                style="align-self: stretch; height: 114px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 50px; display: flex">
                                <div
                                    style="align-self: stretch; height: 114px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 16px; display: flex">
                                    <div
                                        style="align-self: stretch; height: 114px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                                        <div
                                            style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                            <div
                                                style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                                <div
                                                    style="text-align: center; color: #112D63; font-size: 40px; font-family: Outfit; font-weight: 700; line-height: 50px; word-wrap: break-word">
                                                    Sponsorship Packages</div>
                                                <div
                                                    style="width: 700px; text-align: center; color: black; font-size: 18px; font-family: Outfit; font-weight: 300; line-height: 27px; word-wrap: break-word">
                                                    Our sponsorship package offers branding, promotional opportunities,
                                                    and visibility at our event, ideal for enhancing company presence
                                                    and community engagement.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                style="align-self: stretch; height: 503.65px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 32px; display: flex">
                                <div
                                    style="text-align: center; color: black; font-size: 26px; font-family: Outfit; font-weight: 600; line-height: 39px; word-wrap: break-word">
                                    Personal Sponsorship Package</div>
                                <div
                                    style="align-self: stretch; border-radius: 19.20px; overflow: hidden; border: 0.42px #ABEBFF solid; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div
                                        style="flex: 1 1 0; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div
                                            style="align-self: stretch; padding: 20.78px; background: #E0F6FF; justify-content: flex-start; align-items: flex-start; gap: 8.31px; display: inline-flex">
                                            <div
                                                style="flex: 1 1 0; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Membership Tier</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.85px; padding: 20.78px; background: white; justify-content: flex-start; align-items: center; gap: 8.31px; display: inline-flex">
                                            <img style="width: 27.06px; height: 27.06px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                            <div
                                                style="color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Seedling Scout</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.85px; padding: 20.78px; background: #F8FDFF; justify-content: flex-start; align-items: center; gap: 8.31px; display: inline-flex">
                                            <img style="width: 27.06px; height: 27.06px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                            <div
                                                style="color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Sapling Savior</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.85px; padding: 20.78px; background: white; justify-content: flex-start; align-items: center; gap: 8.31px; display: inline-flex">
                                            <img style="width: 27.06px; height: 27.06px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                            <div
                                                style="color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Tree Titan</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.85px; padding: 20.78px; background: #F8FDFF; justify-content: flex-start; align-items: center; gap: 8.31px; display: inline-flex">
                                            <img style="width: 27.06px; height: 27.06px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                            <div
                                                style="color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Mangrove Master</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.85px; padding: 20.78px; background: white; justify-content: flex-start; align-items: center; gap: 8.31px; display: inline-flex">
                                            <img style="width: 27.06px; height: 27.06px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                            <div
                                                style="color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Guardian of the Grove</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.85px; padding: 20.78px; background: #F8FDFF; justify-content: flex-start; align-items: center; gap: 8.31px; display: inline-flex">
                                            <img style="width: 27.06px; height: 27.06px"
                                                src="{{ asset("assets/img/logo/planet-earth.png") }}" />
                                            <div
                                                style="color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Mangrove Maven</div>
                                        </div>
                                    </div>
                                    <div
                                        style="width: 171px; background: #F3FBFE; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div
                                            style="align-self: stretch; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #E0F6FF; justify-content: flex-start; align-items: flex-start; gap: 8.31px; display: inline-flex">
                                            <div
                                                style="flex: 1 1 0; text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Min. Seeds</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                5 Seeds</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                10 Seeds</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                20 Seeds</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                50 Seeds</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                100 Seeds</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                200 Seeds</div>
                                        </div>
                                    </div>
                                    <div
                                        style="width: 183px; background: #F3FBFE; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div
                                            style="align-self: stretch; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #E0F6FF; justify-content: flex-start; align-items: flex-start; gap: 8.31px; display: inline-flex">
                                            <div
                                                style="flex: 1 1 0; text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Min. Buy</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                IDR 75K</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                IDR 150K</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                IDR 300K</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                IDR 750K</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                IDR 1,500K</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                IDR 3,000K</div>
                                        </div>
                                    </div>
                                    <div
                                        style="width: 184px; background: #F3FBFE; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div
                                            style="align-self: stretch; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #E0F6FF; justify-content: flex-start; align-items: flex-start; gap: 8.31px; display: inline-flex">
                                            <div
                                                style="flex: 1 1 0; text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Benefits</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                Badge</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                Badge + Pin</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                Badge + Pin</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                Badge + Pin + Bag</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                Badge + Pin + Bag</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                Badge + Pin + Bag</div>
                                        </div>
                                    </div>
                                    <div
                                        style="width: 184px; background: #F3FBFE; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div
                                            style="align-self: stretch; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #E0F6FF; justify-content: flex-start; align-items: flex-start; gap: 8.31px; display: inline-flex">
                                            <div
                                                style="flex: 1 1 0; text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                donors</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                4,900 Donors</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                4,300 Donors</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                15,000 Donors</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                5,000 Donors</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                300 Donors</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.95px; word-wrap: break-word">
                                                10 Donors</div>
                                        </div>
                                    </div>
                                    <div
                                        style="width: 269px; background: #F3FBFE; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div
                                            style="align-self: stretch; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #E0F6FF; justify-content: flex-start; align-items: flex-start; gap: 8.31px; display: inline-flex">
                                            <div
                                                style="flex: 1 1 0; text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.95px; word-wrap: break-word">
                                                Action</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="padding-left: 18px; padding-right: 18px; padding-top: 6px; padding-bottom: 6px; background: #518BBB; border-radius: 9000px; border: 1px solid; justify-content: center; align-items: center; gap: 5px; display: inline-flex">
                                                <div
                                                    style="text-align: center; color: white; font-size: 14px; font-family: Outfit; font-weight: 600; line-height: 21px; word-wrap: break-word">
                                                    Support Our Mission</div>
                                                <div style="width: 18px; height: 18px; position: relative">
                                                    <div
                                                        style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute">
                                                        <div
                                                            style="width: 6.65px; height: 13px; left: 5.92px; top: 2.50px; position: absolute; background: white">
                                                        </div>
                                                        <div
                                                            style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute; opacity: 0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="padding-left: 18px; padding-right: 18px; padding-top: 6px; padding-bottom: 6px; background: #518BBB; border-radius: 9000px; border: 1px solid; justify-content: center; align-items: center; gap: 5px; display: inline-flex">
                                                <div
                                                    style="text-align: center; color: white; font-size: 14px; font-family: Outfit; font-weight: 600; line-height: 21px; word-wrap: break-word">
                                                    Support Our Mission</div>
                                                <div style="width: 18px; height: 18px; position: relative">
                                                    <div
                                                        style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute">
                                                        <div
                                                            style="width: 6.65px; height: 13px; left: 5.92px; top: 2.50px; position: absolute; background: white">
                                                        </div>
                                                        <div
                                                            style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute; opacity: 0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="padding-left: 18px; padding-right: 18px; padding-top: 6px; padding-bottom: 6px; background: #518BBB; border-radius: 9000px; border: 1px solid; justify-content: center; align-items: center; gap: 5px; display: inline-flex">
                                                <div
                                                    style="text-align: center; color: white; font-size: 14px; font-family: Outfit; font-weight: 600; line-height: 21px; word-wrap: break-word">
                                                    Support Our Mission</div>
                                                <div style="width: 18px; height: 18px; position: relative">
                                                    <div
                                                        style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute">
                                                        <div
                                                            style="width: 6.65px; height: 13px; left: 5.92px; top: 2.50px; position: absolute; background: white">
                                                        </div>
                                                        <div
                                                            style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute; opacity: 0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="padding-left: 18px; padding-right: 18px; padding-top: 6px; padding-bottom: 6px; background: #518BBB; border-radius: 9000px; border: 1px solid; justify-content: center; align-items: center; gap: 5px; display: inline-flex">
                                                <div
                                                    style="text-align: center; color: white; font-size: 14px; font-family: Outfit; font-weight: 600; line-height: 21px; word-wrap: break-word">
                                                    Support Our Mission</div>
                                                <div style="width: 18px; height: 18px; position: relative">
                                                    <div
                                                        style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute">
                                                        <div
                                                            style="width: 6.65px; height: 13px; left: 5.92px; top: 2.50px; position: absolute; background: white">
                                                        </div>
                                                        <div
                                                            style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute; opacity: 0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="padding-left: 18px; padding-right: 18px; padding-top: 6px; padding-bottom: 6px; background: #518BBB; border-radius: 9000px; border: 1px solid; justify-content: center; align-items: center; gap: 5px; display: inline-flex">
                                                <div
                                                    style="text-align: center; color: white; font-size: 14px; font-family: Outfit; font-weight: 600; line-height: 21px; word-wrap: break-word">
                                                    Support Our Mission</div>
                                                <div style="width: 18px; height: 18px; position: relative">
                                                    <div
                                                        style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute">
                                                        <div
                                                            style="width: 6.65px; height: 13px; left: 5.92px; top: 2.50px; position: absolute; background: white">
                                                        </div>
                                                        <div
                                                            style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute; opacity: 0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.62px; padding-right: 16.62px; padding-top: 20.78px; padding-bottom: 20.78px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="padding-left: 18px; padding-right: 18px; padding-top: 6px; padding-bottom: 6px; background: #518BBB; border-radius: 9000px; border: 1px solid; justify-content: center; align-items: center; gap: 5px; display: inline-flex">
                                                <div
                                                    style="text-align: center; color: white; font-size: 14px; font-family: Outfit; font-weight: 600; line-height: 21px; word-wrap: break-word">
                                                    Support Our Mission</div>
                                                <div style="width: 18px; height: 18px; position: relative">
                                                    <div
                                                        style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute">
                                                        <div
                                                            style="width: 6.65px; height: 13px; left: 5.92px; top: 2.50px; position: absolute; background: white">
                                                        </div>
                                                        <div
                                                            style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute; opacity: 0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="align-self: stretch; height: 0px; border: 1px #EEEEEE solid"></div>
                            <div
                                style="align-self: stretch; height: 748.16px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 32px; display: flex">
                                <div
                                    style="text-align: center; color: black; font-size: 26px; font-family: Outfit; font-weight: 600; line-height: 39px; word-wrap: break-word">
                                    Corporate Sponsorship Package</div>
                                <div
                                    style="align-self: stretch; border-radius: 19.20px; overflow: hidden; border: 0.42px #ABEBFF solid; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                    <div
                                        style="width: 366px; background: #F3FBFE; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #E0F6FF; justify-content: center; align-items: center; gap: 8.31px; display: inline-flex">
                                            <div
                                                style="flex: 1 1 0; text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.94px; word-wrap: break-word">
                                                Benefits</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                Price</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="text-align: center"><span
                                                    style="color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">CO</span><span
                                                    style="color: #1A2232; font-size: 10px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">2</span><span
                                                    style="color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                    Sequestration</span></div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                Number of Tress</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                Logo on JCI Banner</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                Logo on Communal Stainless Plate</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="width: 233px; text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.88px; word-wrap: break-word">
                                                Considered as Main Sponsor</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="width: 217px; text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                Dedicated Stainless Plate</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="width: 243px; text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                Report Update on Planted Trees</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="width: 229px; text-align: center; color: #1A2232; font-size: 16.62px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                Logo on Event Clothings</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #518BBB; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="width: 332.77px; flex: 1 1 0; text-align: center; color: white; font-size: 16.62px; font-family: Outfit; font-weight: 600; line-height: 19.94px; word-wrap: break-word">
                                                Make a Donation</div>
                                        </div>
                                    </div>
                                    <div
                                        style="flex: 1 1 0; background: #F3FBFE; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #E0F6FF; justify-content: center; align-items: center; gap: 8.31px; display: inline-flex">
                                            <div
                                                style="flex: 1 1 0; text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.94px; word-wrap: break-word">
                                                Eco Trailblazers</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                15 Million IDR</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                22,5 ton/year</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                1000 Trees</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white">
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF">
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white">
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #518BBB; border-left: 1px white solid; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="padding-left: 18px; padding-right: 18px; padding-top: 6px; padding-bottom: 6px; background: white; border-radius: 9000px; border: 1px solid; justify-content: center; align-items: center; gap: 5px; display: inline-flex">
                                                <div
                                                    style="text-align: center; color: #518BBB; font-size: 14px; font-family: Outfit; font-weight: 600; line-height: 21px; word-wrap: break-word">
                                                    Support Our Mission</div>
                                                <div style="width: 18px; height: 18px; position: relative">
                                                    <div
                                                        style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute">
                                                        <div
                                                            style="width: 6.65px; height: 13px; left: 5.92px; top: 2.50px; position: absolute; background: #518BBB">
                                                        </div>
                                                        <div
                                                            style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute; opacity: 0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="flex: 1 1 0; background: #F3FBFE; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-top: 17.58px; padding-bottom: 17.58px; background: #E0F6FF; justify-content: flex-start; align-items: center; gap: 8.31px; display: inline-flex">
                                            <div
                                                style="flex: 1 1 0; text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.94px; word-wrap: break-word">
                                                Green Innovators</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                30 Million IDR</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                45 ton/year</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                2000 Trees</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white">
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #518BBB; border-left: 1px white solid; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="padding-left: 18px; padding-right: 18px; padding-top: 6px; padding-bottom: 6px; background: white; border-radius: 9000px; border: 1px solid; justify-content: center; align-items: center; gap: 5px; display: inline-flex">
                                                <div
                                                    style="text-align: center; color: #518BBB; font-size: 14px; font-family: Outfit; font-weight: 600; line-height: 21px; word-wrap: break-word">
                                                    Support Our Mission</div>
                                                <div style="width: 18px; height: 18px; position: relative">
                                                    <div
                                                        style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute">
                                                        <div
                                                            style="width: 6.65px; height: 13px; left: 5.92px; top: 2.50px; position: absolute; background: #518BBB">
                                                        </div>
                                                        <div
                                                            style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute; opacity: 0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="flex: 1 1 0; background: #F3FBFE; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #E0F6FF; justify-content: flex-start; align-items: center; gap: 8.31px; display: inline-flex">
                                            <div
                                                style="flex: 1 1 0; text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 500; text-transform: capitalize; line-height: 19.94px; word-wrap: break-word">
                                                Eco Vanguard</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                45 Million IDR</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                67,5 ton/year</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="text-align: center; color: #1A2232; font-size: 16.61px; font-family: Outfit; font-weight: 400; line-height: 19.94px; word-wrap: break-word">
                                                3000 Trees</div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #F8FDFF; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: white; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div style="width: 30px; height: 30px; position: relative">
                                                <div
                                                    style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute">
                                                    <div style="width: 24px; height: 24px; position: relative;">
                                                        <!-- Image icon placed to the left of the text -->
                                                        <img src="{{ asset("assets/img/logo/tick-circle.png") }}"
                                                            alt="Icon"
                                                            style="width: 24px; height: 24px; position: absolute;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="align-self: stretch; height: 61.56px; padding-left: 16.61px; padding-right: 16.61px; padding-top: 17.58px; padding-bottom: 17.58px; background: #518BBB; border-left: 1px white solid; flex-direction: column; justify-content: center; align-items: center; gap: 8.31px; display: flex">
                                            <div
                                                style="padding-left: 18px; padding-right: 18px; padding-top: 6px; padding-bottom: 6px; background: white; border-radius: 9000px; border: 1px solid; justify-content: center; align-items: center; gap: 5px; display: inline-flex">
                                                <div
                                                    style="text-align: center; color: #518BBB; font-size: 14px; font-family: Outfit; font-weight: 600; line-height: 21px; word-wrap: break-word">
                                                    Support Our Mission</div>
                                                <div style="width: 18px; height: 18px; position: relative">
                                                    <div
                                                        style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute">
                                                        <div
                                                            style="width: 6.65px; height: 13px; left: 5.92px; top: 2.50px; position: absolute; background: #518BBB">
                                                        </div>
                                                        <div
                                                            style="width: 18px; height: 18px; left: 0px; top: 0px; position: absolute; opacity: 0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
                <section class="align-items-center" id="hero">
                    <div class="row align-items-center">
                        <div
                            style="width: 1440px; height: 668px; padding-left: 78px; padding-right: 78px; padding-top: 70px; padding-bottom: 70px; background: #F5FAF8; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                            <div
                                style="align-self: stretch; height: 253px; flex-direction: column; justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                                <div
                                    style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 30px; display: flex">
                                    <div
                                        style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                                        <div
                                            style="text-align: center; color: #336913; font-size: 40px; font-family: Outfit; font-weight: 700; line-height: 50px; word-wrap: break-word">
                                            Donate Today and be a<br />Guardian of the Green Belt.</div>
                                        <div
                                            style="width: 700px; text-align: center; color: black; font-size: 20px; font-family: Outfit; font-weight: 300; line-height: 30px; word-wrap: break-word">
                                            Join us in our mission to rejuvenate and protect our shorelines <br />by
                                            donating to our mangrove planting project. </div>
                                    </div>
                                    <div
                                        style="padding-left: 31.25px; padding-right: 31.25px; padding-top: 12.50px; padding-bottom: 12.50px; background: #336913; border-radius: 11250px; border: 1.25px solid; justify-content: center; align-items: center; gap: 6.25px; display: inline-flex">
                                        <div
                                            style="text-align: center; color: white; font-size: 18.75px; font-family: Outfit; font-weight: 600; line-height: 28.12px; word-wrap: break-word">
                                            Support Our Mission</div>
                                        <div style="width: 22.50px; height: 22.50px; position: relative">
                                            <div
                                                style="width: 22.50px; height: 22.50px; left: 0px; top: 0px; position: absolute">
                                                <div
                                                    style="width: 8.31px; height: 16.25px; left: 7.40px; top: 3.12px; position: absolute; background: white">
                                                </div>
                                                <div
                                                    style="width: 22.50px; height: 22.50px; left: 0px; top: 0px; position: absolute; opacity: 0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="width: 1283.48px; height: 425.53px; justify-content: center; align-items: flex-end; gap: 20.35px; display: inline-flex">
                                        <img style="width: 240.52px; height: 425.53px; position: relative; border-left: 6px white solid; border-top: 6px white solid; border-right: 6px white solid"
                                            src="{{ asset("assets/img/logo/Frame88.png") }}" />
                                        <img style="width: 240.52px; height: 281.22px; position: relative; border-left: 6px white solid; border-top: 6px white solid; border-right: 6px white solid"
                                            src="{{ asset("assets/img/logo/Frame89.png") }}" />
                                        <img style="width: 240px; height: 161px; position: relative; border-left: 6px white solid; border-top: 6px white solid; border-right: 6px white solid"
                                            src="{{ asset("assets/img/logo/Frame90.png") }}" />
                                        <img style="width: 240.52px; height: 281.22px; position: relative; border-left: 6px white solid; border-top: 6px white solid; border-right: 6px white solid"
                                            src="{{ asset("assets/img/logo/Frame91.png") }}" />
                                        <img style="width: 240.52px; height: 425.53px; position: relative; border-left: 6px white solid; border-top: 6px white solid; border-right: 6px white solid"
                                            src="{{ asset("assets/img/logo/Frame92.png") }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        @include("components.footer")
        @include("partials.adventage")
        @include("partials.zone")

        {{-- SCRIPT JS --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>
        <script src="{{ asset("assets/js/script.js") }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();

            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    }
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        </script>
        {{-- END SCRIPT JS --}}
    </body>

</html>
