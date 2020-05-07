<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $links = [];
    protected $categories = [
        'sience',
        'gatgets',
        'sport',
        'politics',
        'auto'
    ];

    protected $news = [
        'sience' =>
            [
                [
                    'title' => 'На экзопланетах с водородными атмосферами может существовать жизнь',
                    'text' => 'Эксперимент, проведенный исследователями из Массачусетского технологического института, заставляет предположить, что на экзопланетах с атмосферами, состоящими преимущественно из водорода, может существовать жизнь. В ходе эксперимента в атмосфере из чистого водорода поддерживались культуры кишечной палочки и пекарских дрожжей.',
                    'date' => 1588858582
                ],
                [
                    'title' => 'Создан прототип реактивного двигателя, работающего на обычном воздухе',
                    'text' => 'Пока прототип смог поднять на 2,4 см в воздух стальной шар массой 1 кг. При это он создал тягу, сопоставимую с современными реактивными двигателями.',
                    'date' => 1588845774

                ],
                [
                    'title' => 'Физики создали основу для сверхточных атомных часов',
                    'text' => 'Европейские и российские ученые создали и проверили методику, благодаря которой можно отслеживать положение электронов в окрестностях сильно заряженных ионов.',
                    'date' => 1588849523
                ],
                [
                    'title' => 'Новые поиски темной материи предложили вести на старых детекторах',
                    'text' => 'По результатам исследования авторы установили, что в реакциях с испусканием нейтрино, которые протекают при участии частиц темной материи, ядро-мишень приобретает строго определенные значения энергии.',
                    'date' => 1588759523
                ]
            ],
        'gatgets' =>
            [
                [
                    'title' => 'Блокчейн-платформу TON запустили без Павла Дурова и Telegram',
                    'text' => 'Что разрабатывал Павел Дуров и его команда Команда мессенджера Telegram во главе с его основателем Павлом Дуровым уже более двух лет работает над созданием блокчейн-платформы Telegram Open Network (TON).',
                    'date' => 1588850774
                ],
                [
                    'title' => 'Хакер получил доступ к ПК взломав блок питания',
                    'text' => 'Компьютер не был подключен к сети, но для получения доступа к его данным и не требовалось ничего такого. достаточно было внедрить на ПК вредоносный код, который считывал системную информацию, меняя нагрузку на процессор, который в свою очередь начинал повышать нагрузку на блок питания.',
                    'date' => 1588858765
                ],
                [
                    'title' => 'Открылся сбор предзаказов Mortal Kombat 11: Aftermath',
                    'text' => 'В Steam, PS Store и Microsoft Store начался сбор предварительных заказов Mortal Kombat: Aftermath — крупного DLC, которое выйдет 26 мая.',
                    'date' => 1588852774
                ],
                [
                    'title' => 'DJI представила Matrice 300 RTK: новый эталон промышленных дронов',
                    'text' => 'Хотя китайская DJI известна широкой публике прежде всего благодаря своим потребительским дронам серий Phantom, Mavic или Inspire, для самой компании куда важнее рынок промышленных решений вроде сельскохозяйственных Argos или универсальных Matrice.',
                    'date' => 1588838774
                ]
            ],
        'sport' =>
            [
                [
                    'title' => 'В «Локомотиве» выявили два случая заражения коронавирусом
',
                    'text' => 'В московском "Локомотиве" выявлено два случая заражение коронавирусной инфекцией, сообщает Telegram-канал "Мутко против". Отмечается, что один из заболевших госпитализирован, а второй лечится дома.',
                    'date' => 1588858174
                ],
                [
                    'title' => 'Бой Тайсона и Емельяненко может пройти в Белоруссии',
                    'text' => 'Ранее Емельяненко выразил желание сразиться с Тайсоном в выставочном поединке. Сам Тайсон намерен продолжить карьеру ради благотворительных целей. 53-летний Тайсон был абсолютным чемпионом мира по боксу с 1987 по 1990 год.',
                    'date' => 1588855774
                ],
                [
                    'title' => 'Тайсону предложили $ 1 млн за бой с регбистом',
                    'text' => 'По мнению промоутера, на "Мельбурн Арену" придут более 10 тыс. человек. Власов не считает Тайсона великим боксёром Аматруда заявил, что уже связался с агентом Тайсона и попросил предложить спортсмену $ 1 млн за бой. Ответ американского боксёра пока неизвестен.',
                    'date' => 1588658774
                ],
                [
                    'title' => 'Итальянская Монца может принять два этапа «Формулы-1» в нынешнем году',
                    'text' => 'Autosprint сообщает, что организаторы Гран-при Италии рассматривают возможность проведения двух этапов сезона-2020 на автодроме в Монце.',
                    'date' => 1588853805
                ]
            ],
        'politics' =>
            [

                [
                    'title' => 'Опубликованы фото кораблей НАТО в Баренцевом море',
                    'text' => 'Шестой флот США опубликовал снимки группировки кораблей НАТО у границ России в Баренцевом море. Эсминцы "Портер", "Дональд Кук", "Франклин Рузвельт" ВМС США и фрегат "Кент" ВМС Великобритании вошли в акваторию Баренцева моря утром 4 мая.',
                    'date' => 1588828774
                ],
                [
                    'title' => 'США готовят договор о добыче ископаемых на Луне без России',
                    'text' => 'США готовят проект международного соглашения о добыче ресурсов на Луне. К договору планируется подключить ряд стран-партнеров, в число которых Россия не вошла, сообщает "Экспресс газета".',
                    'date' => 1588857828
                ],
                [
                    'title' => 'Трамп поговорил по телефону с Путиным',
                    'text' => 'Американский президент Дональд Трамп в четверг в телефонном разговоре с российским лидером Владимиром Путиным заявил о готовности США предоставить помощь России в борьбе с пандемией нового коронавируса.',
                    'date' => 1588856774
                ],
                [
                    'title' => 'Китайский бомбардировщик-невидимка может выйти в свет уже в 2020 году',
                    'text' => 'Издание сообщает, что уже предположительно в текущем году Поднебесная вполне может закончить разработку собственного малозаметного бомбардировщика Xian H-20. По некоторым данным, новый перспективный стелс-бомбардировщик вполне могут показать в ноябре на авиасалоне AirShow China в Чжухае.',
                    'date' => 1588818963
                ]
            ],
        'auto' =>
            [

                [
                    'title' => 'В Skoda рассказали об электрическом кроссовере Skoda Enyaq iV',
                    'text' => 'Электрокроссовер Skoda Enyaq iV, о первых тестах которого «Автоновости дня» сообщили еще вчера, выйдет на рынок в пяти модификациях и специальной версии Enyaq iV Founder’s Edition, посвященной 125-летию чешской марки.',
                    'date' => 1588848963
                ],
                [
                    'title' => 'АвтоВАЗ запатентовал названия новых моделей Lada',
                    'text' => 'Отечественный автопроизводитель зарегистрировал в Роспатенте три новых коммерческих наименования – Tensa, Forta и Kayna. При этом стоит отметить, что названия оформлены и в связке с LADA, и по-отдельности.',
                    'date' => 1588853963
                ],
                [
                    'title' => 'Пикапы впервые в истории стали популярнее легковушек в США',
                    'text' => 'Впервые в истории пикапы опередили по продажам легковые автомобили в США. Небольшие грузовики стали популярнее легковушек по итогам апреля.',
                    'date' => 1588852963
                ],
                [
                    'title' => 'Обнародована стоимость электрического УАЗ «Хантер»',
                    'text' => 'Прага, 6 мая 2020, 14:46 — REGNUM Чешская компания MW Motors обнародовала стоимость внедорожника Spartan с электромотором, который был создан на базе УАЗ «Хантер». Об этом сообщается на сайте компании. Стоимость электрического УАЗ «Хантер» будет составлять 40 тысяч евро (3,3 миллиона рублей).',
                    'date' => 1588828963
                ]

            ]
    ];

    public function __construct()
    {

        //View::share('main', 'main');
    }


    public function getCategory()
    {
        return $this->categories;
    }

    public function getNews()
    {
        return $this->news;
    }

    public function getLinks()
    {
        $this->links = $this->categories;
        return $this->links;
    }


}
