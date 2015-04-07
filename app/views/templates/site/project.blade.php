<?
/**
 * TITLE: Проект
 * AVAILABLE_ONLY_IN_ADVANCED_MODE
 */
?>
@extends(Helper::layout())
@section('style')
@stop
@section('page_class')project-detail
@stop
@section('content')
    <div class="slave-menu">
        <div class="holder">
            <h2>Выберите тип таунхауса</h2>
            <div class="row">
                <div class="type">
                    <div class="name">
                        <img src="{{ asset(Config::get('site.theme_path').'/images/ico-house-1.png') }}" class="ico">
                        <div class="title">1 этажные</div>
                    </div>
                    <a href="" class="unit active">67 м<sup>2</sup></a>
                    <a href="" class="unit">75 м<sup>2</sup></a>
                    <a href="" class="unit">89 м<sup>2</sup></a>
                </div>
                <div class="type">
                    <div class="name">
                        <img src="{{ asset(Config::get('site.theme_path').'/images/ico-house-2.png') }}" class="ico">
                        <div class="title">2 этажные</div>
                    </div>
                    <a href="" class="unit">138 м<sup>2</sup></a>
                    <a href="" class="unit">141 м<sup>2</sup></a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="holder col-2 wside">
            <div class="row">
                <div class="text">
                    <h1>Одноэтажный таунхаус, 67м<sup>2</sup></h1>
                    <p>
                    <nobr>1-этажный</nobr> проект дома сочетает в&nbsp;себе компактность
                    и&nbsp;удобство. Несмотря на&nbsp;небольшую площадь, все комнаты
                    просторные и&nbsp;уютные, а&nbsp;поддерживать в&nbsp;порядок
                    в&nbsp;таком доме не&nbsp;сложно. Основное преимущество
                    <nobr>1-этажного</nobr> дома&nbsp;&mdash; быстрый доступ
                    ко&nbsp;всем помещениям, а&nbsp;также безопасность в&nbsp;виду
                    отсутствия лестниц, что особенно важно и&nbsp;актуально для семей
                    с&nbsp;детьми или пожилых людей.
                    </p>
                </div>
                <div class="side">
                    <div class="title">Цена</div><strong>от 35 000 руб./м<sup>2</sup></strong>
                </div>
            </div>
            <div class="row">
                <div class="visual-with-points">
                    <div style="background-image: url('/images/visual-house.jpg')" class="img"></div>
                    <div class="marks">
                        <div style="top:50px; left: 150px;" class="mark"><a class="plus"></a><a class="cross"></a>
                            <div class="wrapper">
                                <div class="text">
                                    <p>
                                        Благоустройство территории
                                        включает в себя озеленение
                                        и мощение
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div style="top:200px; left: 300px;" class="mark"><a class="plus"></a><a class="cross"></a>
                            <div class="wrapper">
                                <div class="text">
                                    <p>
                                        Благоустройство территории
                                        включает в себя озеленение
                                        и мощение
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row nomargin">
                <div class="text">
                    <p>Строительство и&nbsp;оснащение осуществляется с&nbsp;использованием
                        последних технологий в&nbsp;данной сфере. Покупая таунхаус,
                        Вы&nbsp;получаете в&nbsp;собственность земельный участок. При
                        строительстве дома используется газоблок, известный своими
                        энергосберегающими свойствами при небольших затратах ресурсов,
                        а&nbsp;для облицовки&nbsp;&mdash; кирпич, кроме того, предусмотрен
                        каменный цоколь. Крыша дома покрывается мягкой кровлей. Водоснабжение
                        осуществляется через индивидуальную скважину, поэтому
                        Вы&nbsp;не&nbsp;будете зависеть от&nbsp;городских коммуникаций.
                        В&nbsp;доме будет установлен электрокотел или индукционный котел,
                        который будет поддерживать необходимую температуру воздуха в&nbsp;доме
                        в&nbsp;любое время года. К&nbsp;моменту сдачи проекта
                        в&nbsp;эксплуатацию будет осуществлена разводка электричества
                        по&nbsp;дому (ввод от&nbsp;10 кВт). На&nbsp;участке установлена
                        автономная канализация <nobr>ЭКО-М-1</nobr>, которая прекрасно
                    обслуживает семью до&nbsp;пяти человек. Обслуживание такого очистного
                    сооружения требует минимальных усилий. Дом будет полностью готов для
                    чистовой отделки, поэтому Вы&nbsp;сможете сразу приступить к&nbsp;тому,
                    что придать ему Ваш неповторимый уют и&nbsp;оформление.</p>

                    <p>Также предусмотрена автостоянка и&nbsp;<nobr>мини-генератор</nobr>
                    на&nbsp;веранде, что дает Вам неоспоримый дополнительный комфорт. Территория
                    всего земельного участка благоустроена: устанавливается наружное освещение,
                    обеспечен комфортный подъезд к&nbsp;дому. Участок огорожен забором.
                    В&nbsp;поселке есть вся необходимая благоустроенная инфраструктура для
                    комфортного проживания. Поэтому о&nbsp;безопасности можно
                    не&nbsp;беспокоиться.</p>
                </div>
                <div class="side">
                    <div class="unit">
                        <div class="title">Жилая площадь</div><strong>67,0 м<sup>2</sup></strong>
                    </div>
                    <div class="unit">
                        <div class="title">Участок</div><strong>от 2 соток</strong>
                    </div>
                    <div class="unit">
                        <div class="title">Автостоянка</div><strong>для 1 автомобиля</strong>
                    </div>
                </div>
            </div>
            <div class="row nomargin visual-hover">
                <div class="text">
                    <div class="project-visual-wrapper"><img src="/images/visual-detail-project.png"></div>
                </div>
                <div class="side">
                    <div class="unit">
                        <div class="head"><img src="/images/ico-digit-1.png" class="ico">
                            <div class="title">Этаж</div>
                        </div>
                    </div>
                    <div class="unit"><a href="" class="download-file"><img src="/images/ico-pdf.png" class="ico">
                            <div class="info">
                                <div class="filename">Генеральный план.pdf</div>
                                <div class="size">12мб</div>
                            </div></a></div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
@stop