<?php
    $cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
    $cms->landing( 1, 2 );

    $cms->thankspage = DIR . './success/success.php';
    define( 'THANKSPAGE', $_SERVER['DOCUMENT_ROOT'] . './success/success.php' );
?>
<!DOCTYPE html>
<html lang="cz">

<head>
    <meta charset="utf-8">
    <title>DM-NORM </title>
    <meta name="description" content="DM-NORM">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/styles.min.css">
    <script src="js/scripts.min.js"></script>
    <link rel="stylesheet" href="index_files/owl.carousel.min.css" />
    <link rel="stylesheet" href="index_files/owl.theme.default.css" />
    <script type="text/javascript" src="cdn/js/jquery.js"></script>
    <script src="index_files/owl.carousel.min.js"></script>
    <script src="index_files/slider.js"></script>
    <?php $cms->header(); ?>
</head>

<body>
    <div class="main-banner">
        <div class="container">
            <div class="logo wow fadeInDown lt0" style="visibility: visible; animation-name: fadeInDown;">
                DM-NORM
            </div>
            <div class="main-banner-subtitle wow fadeIn lt1" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">Normalizuje úroveň glukózy a stimuluje tvorbu inzulínu</div>
            <div class="row main-banner-row align-items-end">
                <div class="col-lg-3">
                    <ul class="main-banner-list wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <li><i class="wow pulse animated" data-wow-iteration="12" style="visibility: visible; animation-iteration-count: 12; animation-name: pulse;"></i><span class="lt2">Zvyšuje citlivost na inzulín</span></li>
                        <li><i class="wow pulse animated" data-wow-iteration="12" style="visibility: visible; animation-iteration-count: 12; animation-name: pulse;"></i><span class="lt3">Normalizuje látkovou výměnu</span></li>
                        <li><i class="wow pulse animated" data-wow-iteration="12" style="visibility: visible; animation-iteration-count: 12; animation-name: pulse;"></i><span class="lt4">Čistí cévy od cholesterolu</span></li>
                        <li><i class="wow pulse animated" data-wow-iteration="12" style="visibility: visible; animation-iteration-count: 12; animation-name: pulse;"></i><span class="lt5">Nabíjí energií</span></li>
                    </ul>
                </div>
                <div class="col-lg-5"><img alt="main-banner-product" class="main-banner-product wow fadeIn" data-wow-delay="1s" src="img/product.png" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;"></div>
                <div class="col-lg-4">
                    <div class="main-banner-form wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="main-banner-form-title">
                            <div class="left-z lt6">Jen dnes</div>
                            <div class="corner-z lt7"> <span>sleva</span><?=$cms->discount;?></div>
                        </div>

                        <div class="timer">
                            <div class="count-block">

                                <div class="countdown">
                                    <div class="countdown__item hoursSH">00</div>
                                    <div class="countdown__item minutesSH">39</div>
                                    <div class="countdown__item secondsSH">51</div>
                                </div>
                            </div>
                        </div>

                        <form action="" class="order_form" method="post">
                            <?=$cms->params();?>
                            <label>
                                <select class="country_select" id="country" name="country"></select>
                            </label>
                            <label>
                                <input name="name" placeholder="Název" required="" type="text">
                            </label>
                            <label>
                                <input name="phone" placeholder="Telefon" required="" type="text">
                            </label>
                            <input type="hidden" name="country" value="<?=$cms->country;?>" />
                            <div class="main-banner-price">
                            <div class="price_old"><?=$cms->oldpr;?></div>
                            <div class="price_main"><?=$cms->price;?></div>
                            </div>

                            <button class="main-form-button wow tada lt8" data-wow-delay="1.5s" style="visibility: visible; animation-delay: 1.5s; animation-name: tada;">Objednat</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="disease-description">
        <div class="container">
            <div class="h1 lt9">Cukrovka</div>
            <div class="disease-txt wow fadeIn mobile-important-hide lt10" style="visibility: hidden; animation-name: none;">Je chronické onemocnění, které při nesprávné léčbě vede k vážným komplikacím, až ke smrti. Nehledě na to, většina lidí se ke svému zdraví staví lehkovážně.</div>
            <div class="row disease-statistic-row align-items-center">
                <div class="col-lg-6 mobile-important-hide">
                    <div class="disease-statistic">
                        <div class="disease-statistic-title wow pulse lt11" data-wow-iteration="5" style="visibility: hidden; animation-iteration-count: 5; animation-name: none;">Statistika:</div>
                        <div class="disease-statistic-list">
                            <ul>
                                <li class="lt12"><i class="wow pulse" data-wow-iteration="50" style="visibility: hidden; animation-iteration-count: 50; animation-name: none;"></i> <span class="wow pulse d-inline-block" data-wow-iteration="5" style="visibility: hidden; animation-iteration-count: 5; animation-name: none;">1,6 miliónu úmrtí</span> v roce 2019 je přímo spojeno s diabetem.</li>
                                <li class="lt13"><i class="wow pulse" data-wow-iteration="50" style="visibility: hidden; animation-iteration-count: 50; animation-name: none;"></i> <span class="wow pulse d-inline-block" data-wow-iteration="5" style="visibility: hidden; animation-iteration-count: 5; animation-name: none;">2,2 miliónu úmrtí</span> je způsobeno vysokou hladinou glukózy v krvi.</li>
                                <li class="lt14"><i class="wow pulse" data-wow-iteration="50" style="visibility: hidden; animation-iteration-count: 50; animation-name: none;"></i> <span class="wow pulse d-inline-block" data-wow-iteration="5" style="visibility: hidden; animation-iteration-count: 5; animation-name: none;">K více než 50%</span> úmrtí,, způsobených diabetem, došlo ve věko do 70 let.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6"><img alt="disease" class="disease-img wow fadeInDown" data-wow-delay="1s" src="img/2.jpg" style="visibility: hidden; animation-delay: 1s; animation-name: none;"></div>
            </div>
            <div class="disease-txt-sm wow fadeIn lt15" style="visibility: hidden; animation-name: none;">Nemocných cukrovkou je každým rokem stále více. Pro srovnání: v roce 1980 bylo nemocných diabetem<span class="wow pulse d-inline-block" data-wow-iteration="5" style="visibility: hidden; animation-iteration-count: 5; animation-name: none;"> 108 miliónů lidí</span> na celém světě. Podle údajů z roku 2019 počet nemocných vzrostl na<span class="wow pulse d-inline-block" data-wow-iteration="5" style="visibility: hidden; animation-iteration-count: 5; animation-name: none;"> 463 miliónů.</span> </div>
        </div>
    </div>
    <div class="complications">
        <div class="container">
            <div class="h1 lt16">Komplikace cukrovky</div>
            <div class="complications-row wow fadeIn" style="visibility: hidden; animation-name: none;">
                <div class="comp-1 comp-title wow fadeInDown lt17" data-wow-delay="1s" style="visibility: hidden; animation-delay: 1s; animation-name: none;">Zničení velkých krevních cév:</div>
                <div class="comp-3 comp-description lt18"><img alt="" class="complications-mobile-img" src="img/b1.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">MOZKU</span> mrtvice</div>
                <div class="comp-4 comp-description lt19"><img alt="" class="complications-mobile-img" src="img/b3.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">SRDCE</span> ischemická choroba,<br> infarkt myokardu</div>
                <div class="comp-5 comp-description lt20"><img alt="" class="complications-mobile-img" src="img/b5.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">NOHOU</span> gangréna a amputace</div>
                <div class="comp-2 comp-title wow fadeInDown mobile-important-hide lt21" data-wow-delay="1s" style="visibility: hidden; animation-delay: 1s; animation-name: none;">Zničení malých krevních cév:</div>
                <div class="comp-6 comp-description mobile-important-hide lt22"><img alt="" class="complications-mobile-img" src="img/b2.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">OČÍ </span>ztráta zraku</div>
                <div class="comp-7 comp-description mobile-important-hide lt23"><img alt="" class="complications-mobile-img" src="img/b4.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">LEDVIN </span>diabetická neuropatie, nezbytnost hemodialýzy</div>
                <div class="comp-8 comp-description mobile-important-hide lt24"><img alt="" class="complications-mobile-img" src="img/b6.png"><span class="wow fadeInDown" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">Nervů</span> Diabetická neuropatie</div>
            </div>
            <div class="warning-banner wow pulse lt25" data-wow-iteration="5" style="visibility: hidden; animation-iteration-count: 5; animation-name: none;">Přemýšlejte o následcích!</div>
        </div>
    </div>
    <div class="product-total-description">
        <div class="container">
            <div class="h1 logo-font wow fadeInDown lt26" style="visibility: hidden; animation-name: none;">
                DM-NORM
            </div>
            <div class="product-total-txt wow fadeIn mobile-important-hide lt27" style="visibility: hidden; animation-name: none;">Nejen účinně reguluje úroveň glukózy v krvi, ale směruje účinek přímo na cílové buňky inzulínu a bet-buňky slinivky břišní, kdy obnovuje fungování a stav orgánů, které byly v důsledku těžkého onemocnění poškozeny.</div>
            <div class="product-total-list-title wow fadeIn mobile-important-hide lt28" style="visibility: hidden; animation-name: none;">Má DM-NORM a další účinky:</div>
            <div class="row main-banner-row align-items-end">
                <div class="col-lg-6">
                    <ul class="main-banner-list wow fadeIn" style="visibility: hidden; animation-name: none;">
                        <li class="lt29"> reguluje imunitní funkce</li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: hidden; animation-iteration-count: 12; animation-name: none;"></i><span class="lt30"> zlepšuje stav kůže</span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: hidden; animation-iteration-count: 12; animation-name: none;"></i><span class="lt31"> uklidňuje metabolické procesy</span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: hidden; animation-iteration-count: 12; animation-name: none;"></i><span class="lt32"> normalizuje psychoemocionální stav člověka.</span></li>
                    </ul>
                </div>
                <div class="col-lg-6"><img alt="main-banner-product" class="main-banner-product wow fadeIn" data-wow-delay="1s" src="img/product.png" style="visibility: hidden; animation-delay: 1s; animation-name: none;"></div>
            </div>
        </div>
    </div>
    <div class="catch-banner">
        <div class="container">
            <div class="catch-banner-title wow fadeInDown lt33" style="visibility: hidden; animation-name: none;"> <span>DM-NORM</span> — VÁŠ PLNOHODNOTNÝ ŽIVOT PŘI CUKROVCE</div><a class="navigate-btn catch-banner-btn wow tada lt34" data-wow-delay="1s" href="#footer-form" style="visibility: hidden; animation-delay: 1s; animation-name: none;">Objednat</a>
        </div>
    </div>
    <div class="composition">
        <div class="container">
            <div class="h1 lt35"> <span>DM-NORM</span> se skládá jen z přírodních složek</div>
            <div class="row composition-row">
                <div class="col-lg-6">
                    <div class="composition-card wow fadeInUp dark" style="visibility: hidden; animation-name: none;">
                        <div class="composition-card-title">
                            <img alt="icon" class="wow pulse" data-wow-delay=".1s" data-wow-iteration="5" src="img/z3.png" style="visibility: hidden; animation-delay: 0.1s; animation-iteration-count: 5; animation-name: none;"><span class="lt40">Chrom</span>
                        </div>
                        <div class="composition-card-description lt41">Jeden z nejdůležitějších stopových prvků pro diabetes. Reguluje metabolismus lipidů, pomáhá snižovat hladinu cukru v krvi, reguluje metabolismus sacharidů.</div>
                    </div>
                </div>
                <div class="col-lg-6 mobile-important-hide">
                    <div class="composition-card wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <div class="composition-card-title">
                            <img alt="icon" class="wow pulse" data-wow-delay=".1s" data-wow-iteration="5" src="img/z4.png" style="visibility: hidden; animation-delay: 0.1s; animation-iteration-count: 5; animation-name: none;"><span class="lt42">Selen</span>
                        </div>
                        <div class="composition-card-description lt43">Má silné antioxidační vlastnosti. Působí antidiabeticky, pomáhá snižovat hladinu cukru v krvi. Podporuje fungování imunitního systému.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="opinion mobile-important-hide">
        <div class="container">
            <div class="row align-items-end flex-lg-row-reverse">
                <div class="col-lg-7">
                    <div class="opinion-title wow fadeIn lt48" style="visibility: hidden; animation-name: none;">Názor<br> specialisty</div>
                    <div class="opinion-description wow fadeIn" style="visibility: hidden; animation-name: none;">
                        <p class="lt49"> <span></span> Diabetes má dva mechanizmy rozvoje: první — změny fungování slinivky břišní, spojené s narušením sekrece inzulínu, druhý — existence inzulínové rezistence (ztráty citlivosti buněk na inzulín).</p>
                        <p class="lt50">DM-NORM stimuluje tvorbu inzulínu, kdy ozdravuje slinivku břišní a obnovuje poškozené buňky orgánu. Zároveň napomáhá zvýšení citlivosti na uvedený hormon.</p>
                        <p class="lt51">Tento preparát má kladný vliv na celý organizmus: zbavuje hypertenze a cholesterových usazenin — nezbytného doprovodu diabetu; napomáhá regeneraci struktury jater a plic, zajišťuje výživu nervového systému.</p>
                        <p class="lt52">DM-NORM napomáhá snížení hmotnosti, kdy neutralizuje nejrozšířenější příčinu onemocnění — nadváhu. Snižuje touhu po sladkém, kdy blokuje chuťové oblasti jazyku, které reagují na cukr.</p>
                        <p class="lt53">Jednoznačně, DM-NORM je jedním z nejlepších preparátů proti diabetu, které ke dnešnímu dni existují. Účinkuje na problém komplexně, kdy odstraňuje hned několik příčin onemocnění a ukazuje skvělé výsledky.</p>
                    </div>
                    <div class="signa lt54">Pavel Holý<span> Praktický lékař endokrinolog, profesor katedry endokrinologie</span> </div>
                </div>
                <div class="col-lg-5"><img alt="doc" class="opinion-img wow fadeInLeft" src="img/doc.jpg" style="visibility: hidden; animation-name: none;"></div>
            </div>
        </div>
    </div>
    <div class="catch-banner">
        <div class="container">
            <div class="catch-banner-title wow fadeInDown lt55" style="visibility: hidden; animation-name: none;"> <span>DM-NORM</span> — VÁŠ PLNOHODNOTNÝ ŽIVOT PŘI CUKROVCE</div><a class="navigate-btn catch-banner-btn wow tada lt56" data-wow-delay="1s" href="#footer-form" style="visibility: hidden; animation-delay: 1s; animation-name: none;">Objednat</a>
        </div>
    </div>
    <div class="result">
        <div class="container">
            <div class="h1 lt57">Výsledek užívání <span>DM-NORM</span> </div>
            <div class="row result-row">
                <div class="col-lg-6">
                    <div class="result-list">
                        <ul>
                            <li><i class="wow pulse" data-wow-iteration="10" style="visibility: hidden; animation-iteration-count: 10; animation-name: none;"></i><span class="lt58"> Stabilní a nízký úroveň cukru</span></li>
                            <li><i class="wow pulse" data-wow-iteration="10" style="visibility: hidden; animation-iteration-count: 10; animation-name: none;"></i><span class="lt59"> Snížení rizika komplikací</span></li>
                            <li><i class="wow pulse" data-wow-iteration="10" style="visibility: hidden; animation-iteration-count: 10; animation-name: none;"></i><span class="lt60"> Zlepšení kvality života</span></li>
                            <li><i class="wow pulse" data-wow-iteration="10" style="visibility: hidden; animation-iteration-count: 10; animation-name: none;"></i><span class="lt61"> Nezávislý příjem inzulínu</span></li>
                            <li><i class="wow pulse" data-wow-iteration="10" style="visibility: hidden; animation-iteration-count: 10; animation-name: none;"></i><span class="lt62"> Snížení množstva přijímaných tablet</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="container">
            <div class="h1 lt63">Ohlasy kupujících</div>
            <div class="feedback-slider owl-carousel owl-theme">
                <div>
                    <div class="feedback-slide-card">
                        <img src="img/ava1.png" alt="ava">
                        <div class="feedback-slide-card-description lt65">DM-NORM užívám už třetí týden. Ze dne na den pociťuji stabilní zlepšení svého stavu: zmizela únava, chuť k jídlu se normalizovala. Po jídle nejsou tak velké výkyvy hladiny cukru jako byly dříve. Ale nejdůležitější je, zmizely srdeční záchvaty, které mě trápily několik posledních let. Nakonec se cítím prakticky zdravá! <div class="slider-signa">Marie Adamcová, 55 let</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="feedback-slide-card">
                        <img src="img/ava2.png" alt="ava">
                        <div class="feedback-slide-card-description lt66">Nadváha a cukrovka jdou vždycky ruku v ruce. Celý život jsem byla spíše plnoštíhlá, ale po čtyřicítce hmotnost začala růst stále rychleji. Přibližně v tuto dobu mi objevili cukrovku. Díky DM-NORM se mi postupně podařilo snížit hmotnost, ale v cestě ke svému cíly stále pokračuji. Už se cítím skvěle: již nejsou žádné výkyvy cukru a nepříjemné příznaky, které mi brání vést normální život. <div class="slider-signa">Petra Dlouhá, 53 let</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="feedback-slide-card">
                        <img src="img/ava3.png" alt="ava">
                        <div class="feedback-slide-card-description lt64">Když jsem se dozvěděl, že mám cukrovku, měl jsem za to, že běžný život skončil. Teď jsem téměř invalida, který je nucen neustále sledovat hladinu cukru a užívat tablety po hrstech. Po kúře DM-NORM zmizela únava a ospalost, krevní cukr se normalizoval. A nejdůležitější — přestal jsem často běhat na záchod. Ještě, jak mi sdělil lékař, došlo k zánětu prostaty. Cítím se jako zdravý a normální člověk. Všem doporučuji! <div class="slider-signa">Karel Marek, 62 let</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="use">
        <div class="container">
            <div class="h1 lt71">Způsob užívání</div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="use-card use-card-1 wow fadeInLeft lt72" data-wow-delay="1s" style="visibility: hidden; animation-delay: 1s; animation-name: none;"> <span>Rozpusťte 20 kapek ve 100 ml vody<br>ráno</span> Užívejte před jídlem</div>
                </div>
                <div class="col-lg-4">
                    <div class="use-card use-card-2 wow fadeInLeft lt73" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;"> <span>Rozpusťte 20 kapek ve 100 ml vody<br>večer</span>Užívejte před jídlem</div>
                </div>
                <div class="col-lg-4 mobile-important-hide">
                    <div class="use-card use-card-3 wow fadeInLeft" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;"></div>
                </div>
            </div>
            <div class="use-subtitle lt74">Výsledek užívání ve formě kúry — trvalá remise po dlouhou dobu!</div>
        </div>
    </div>
    <div class="main-banner">
        <div class="container">
            <div class="logo wow fadeInDown lt75" style="visibility: hidden; animation-name: none;">DM-NORM</div>
            <div class="main-banner-subtitle wow fadeIn lt76" data-wow-delay=".4s" style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">Normalizuje úroveň glukózy a stimuluje tvorbu inzulínu</div>
            <div class="row main-banner-row align-items-end">
                <div class="col-lg-3">
                    <ul class="main-banner-list wow fadeIn" style="visibility: hidden; animation-name: none;">
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: hidden; animation-iteration-count: 12; animation-name: none;"></i><span class="lt2">Zvyšuje citlivost na inzulín</span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: hidden; animation-iteration-count: 12; animation-name: none;"></i><span class="lt3">Normalizuje látkovou výměnu</span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: hidden; animation-iteration-count: 12; animation-name: none;"></i><span class="lt4">Čistí cévy od cholesterolu</span></li>
                        <li><i class="wow pulse" data-wow-iteration="12" style="visibility: hidden; animation-iteration-count: 12; animation-name: none;"></i><span class="lt5">Nabíjí energií</span></li>
                    </ul>
                </div>
                <div class="col-lg-5"><img alt="main-banner-product" class="main-banner-product wow fadeIn" data-wow-delay="1s" src="img/product.png" style="visibility: hidden; animation-delay: 1s; animation-name: none;"></div>
                <div class="col-lg-4">
                    <div class="main-banner-form wow fadeIn" style="visibility: hidden; animation-name: none;">
                        <div class="main-banner-form-title" id="footer-form">
                            <div class="left-z lt81">Jen dnes</div>
                            <div class="corner-z lt82"> <span>sleva</span><?=$cms->discount;?></div>
                        </div>

                        <div class="timer">
                            <div class="count-block">

                                <div class="countdown">
                                    <div class="countdown__item hoursSH">00</div>
                                    <div class="countdown__item minutesSH">39</div>
                                    <div class="countdown__item secondsSH">51</div>
                                </div>
                            </div>
                        </div>

                        <form action="" class="order_form" method="post" id="order_form">
                            <?=$cms->params();?>
                            <label>
                                <select class="country_select" id="country" name="country"></select>
                            </label>
                            <label>
                                <input name="name" placeholder="Název" required="" type="text">
                            </label>
                            <label>
                                <input name="phone" placeholder="Telefon" required="" type="text">
                            </label>
                            <input type="hidden" name="country" value="<?=$cms->country;?>" />
                            <div class="main-banner-price">
                                <div class="price_old"><?=$cms->oldpr;?></div>
                                <div class="price_main"><?=$cms->price;?></div>
                            </div>

                            <button class="main-form-button wow tada lt83" data-wow-delay="1.5s" style="visibility: hidden; animation-delay: 1.5s; animation-name: none;">Objednat</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="how-work">
        <div class="container">
            <div class="h1 lt84">Jak pracujeme</div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="how-work-card wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <img alt="e1" src="img/e1.png">
                        <div class="how-work-card-description lt85">Zanechte požadavek na našich stránkách</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="how-work-card wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <img alt="e1" src="img/e2.png">
                        <div class="how-work-card-description lt86">Operátor se s vámi spojí pro potvrzení objednávky</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="how-work-card wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <img alt="e1" src="img/e3.png">
                        <div class="how-work-card-description lt87">Platba při doručení objednávky</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="wow flipInX lt88" data-wow-delay="1s" style="visibility: hidden; animation-delay: 1s; animation-name: none;">
        DM-NORM
    </footer>
    <script type="text/javascript">
        $(function() {
            $("a[href^='#']").click(function() {
                var _href = $(this).attr("href");
                $("html, body").animate({
                    scrollTop: $(_href).offset().top + "px"
                });
                return false;
            });
        });
    </script>
    <script>
        $(function() {
            var nowDate = new Date();
            var countDownDiff = Math.ceil((24 * 60 * 60) - (nowDate.getHours() * 60 * 60 + nowDate.getMinutes() * 60 + nowDate.getSeconds()));
            var endDate = new Date(nowDate.getTime() + countDownDiff * 1000);
            setInterval(function() {
                var diffDate = new Date(endDate.getTime() - Date.now()),
                    h = (diffDate.getHours() > 9) ? diffDate.getHours() : '0' + diffDate.getHours(),
                    m = (diffDate.getMinutes() > 9) ? diffDate.getMinutes() : '0' + diffDate.getMinutes(),
                    s = (diffDate.getSeconds() > 9) ? diffDate.getSeconds() : '0' + diffDate.getSeconds();
                $('.hoursSH').html(h);
                $('.minutesSH').html(m);
                $('.secondsSH').html(s);
            }, 1000);
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel();
        });
    </script>
    <script>
        new WOW().init();
    </script>
    <?php $cms->footer(); ?>
</body>

</html>