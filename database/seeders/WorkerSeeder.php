<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return votab_number
     */
    public function run()
    {
        Worker::truncate();

        $data = [
            [
                'tab_number' => '0004',
                'fullname' => 'Абдувалиев Маъмур Бекмирзаевич',
                'passport' => 'AC1562287'
            ],
            [
                'tab_number' => '0007',
                'fullname' => 'Азимов Равшанжон Халимжон угли',
                'passport' => 'AA7941457'
            ],
            [
                'tab_number' => '0010',
                'fullname' => 'Ахмедов Санатжон Мамадалиевич',
                'passport' => 'AB0306574'
            ],
            [
                'tab_number' => '0012',
                'fullname' => 'Алимирзаев Икболмирза Нуъманович',
                'passport' => 'AA1138211'
            ],
            [
                'tab_number' => '0014',
                'fullname' => 'Акбаралиев Гайрат Эркинович',
                'passport' => 'AA7553628'
            ],
            [
                'tab_number' => '0024',
                'fullname' => 'Ахмадалиев Уктам Махмудович',
                'passport' => 'AB8491596'
            ],
            [
                'tab_number' => '0037',
                'fullname' => 'Ахмедгалиев Гали Габделхаевич',
                'passport' => 'AA9621077'
            ],
            [
                'tab_number' => '0053',
                'fullname' => 'Бойматов Ойбек Солижонович',
                'passport' => 'AA1056610'
            ],
            [
                'tab_number' => '0055',
                'fullname' => 'Буронов Ислом Ахмадович',
                'passport' => 'AA5869112'
            ],
            [
                'tab_number' => '0117',
                'fullname' => 'Гафуров Рахим Вахобович',
                'passport' => 'AA9306165'
            ],
            [
                'tab_number' => '0120',
                'fullname' => 'Галиев Замир Рашидович',
                'passport' => 'AB0220621'
            ],
            [
                'tab_number' => '0125',
                'fullname' => 'Гафуров Лазизжон Шарипович',
                'passport' => 'AA5004678'
            ],
            [
                'tab_number' => '0131',
                'fullname' => 'Гафуров Акмал Мухаммедович',
                'passport' => 'AA8594362'
            ],
            [
                'tab_number' => '0151',
                'fullname' => 'Дехканов Азизжон Алижанович',
                'passport' => 'AA2029627'
            ],
            [
                'tab_number' => '0152',
                'fullname' => 'Дехканов Икрам Турсунович',
                'passport' => 'AB0685521'
            ],
            [
                'tab_number' => '0153',
                'fullname' => 'Дадажонов Акмалжон Одилович',
                'passport' => 'AA8290770'
            ],
            [
                'tab_number' => '0205',
                'fullname' => 'Жалилов Рахимджон Носирович',
                'passport' => 'AA4643193'
            ],
            [
                'tab_number' => '0226',
                'fullname' => 'Зокиров Хусниддин Кахрамонжон угли',
                'passport' => 'AC1247911'
            ],
            [
                'tab_number' => '0255',
                'fullname' => 'Имомов Акрам Содикович',
                'passport' => 'AA4568490'
            ],
            [
                'tab_number' => '0256',
                'fullname' => 'Исмаилов Фазлиддин Меликузиевич',
                'passport' => 'AB0215559'
            ],
            [
                'tab_number' => '0284',
                'fullname' => 'Каримов Мухитдинжон Набиевич',
                'passport' => 'AB7266236'
            ],
            [
                'tab_number' => '0292',
                'fullname' => 'Кучкарбаев Мухаммад Закирович',
                'passport' => 'AA7941906'
            ],
            [
                'tab_number' => '0293',
                'fullname' => 'Кодиров Ахрор Анварович',
                'passport' => 'AB7983629'
            ],
            [
                'tab_number' => '0294',
                'fullname' => 'Косимов Сидикжон Саминович',
                'passport' => 'AB1306567'
            ],
            [
                'tab_number' => '0295',
                'fullname' => 'Каримов Бехзод Юлдашевич',
                'passport' => 'AA5022614'
            ],
            [
                'tab_number' => '0300',
                'fullname' => 'Мелибоев Уринбой Жураевич',
                'passport' => 'AB6095998'
            ],
            [
                'tab_number' => '0301',
                'fullname' => 'Алимов Камол Хаётович',
                'passport' => 'AA1553543'
            ],
            [
                'tab_number' => '0303',
                'fullname' => 'Халиков Элёржон Камолович',
                'passport' => 'AA0394244'
            ],
            [
                'tab_number' => '0305',
                'fullname' => 'Меликузиев Абдурахмон Усмонович',
                'passport' => 'AB1702040'
            ],
            [
                'tab_number' => '0309',
                'fullname' => 'Мамажонов Иброхимжон Муроджон угли',
                'passport' => 'AB1347681'
            ],
            [
                'tab_number' => '0310',
                'fullname' => 'Кодиров Хамиджон Набижонович',
                'passport' => 'AA8952161'
            ],
            [
                'tab_number' => '0311',
                'fullname' => 'Назиров Хайрулло Каримович',
                'passport' => 'AA7543269'
            ],
            [
                'tab_number' => '0315',
                'fullname' => 'Муроджонов Давлатбек Дилшодбек угли',
                'passport' => 'AA2192819'
            ],
            [
                'tab_number' => '0317',
                'fullname' => 'Мадумаров Орипжон Мамадалиевич',
                'passport' => 'AB1167563'
            ],
            [
                'tab_number' => '0327',
                'fullname' => 'Хабибжонов Аваз Бурхонович',
                'passport' => 'AB0317922'
            ],
            [
                'tab_number' => '0330',
                'fullname' => 'Ахмадалиев Мехмонали Бахтиёрович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0333',
                'fullname' => 'Тухтабоев Сарварбек Хасанбой угли',
                'passport' => 'AA2904554'
            ],
            [
                'tab_number' => '0335',
                'fullname' => 'Махмудов Азиз Анварович',
                'passport' => 'AA7666853'
            ],
            [
                'tab_number' => '0337',
                'fullname' => 'Одилов Достонбек Вохиджон угли',
                'passport' => 'AA1931785'
            ],
            [
                'tab_number' => '0338',
                'fullname' => 'Рахматуллаев Жахонгир Йигитали угли',
                'passport' => 'AB6958183'
            ],
            [
                'tab_number' => '0339',
                'fullname' => 'Исломов Аюбхон Адхамжон угли',
                'passport' => 'AA1807722'
            ],
            [
                'tab_number' => '0340',
                'fullname' => 'Раджапов Абдусаттар Абдурахимович',
                'passport' => 'AA3143912'
            ],
            [
                'tab_number' => '0342',
                'fullname' => 'Мелибоев Жалолитдин Камолиддинович',
                'passport' => 'AB4472809'
            ],
            [
                'tab_number' => '0343',
                'fullname' => 'Эргашева Рохатхон Уринбой кизи',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0344',
                'fullname' => 'Мелибоев Акрам Ахмедович',
                'passport' => 'AB4472225'
            ],
            [
                'tab_number' => '0345',
                'fullname' => 'Муминов Содик Джуманович',
                'passport' => 'AA4928686'
            ],
            [
                'tab_number' => '0347',
                'fullname' => 'Мелибаев Мухаммад Ахмедович',
                'passport' => 'AB1617921'
            ],
            [
                'tab_number' => '0354',
                'fullname' => 'Турдалиев Дилшоджон Шаробиддин угли',
                'passport' => 'AB2479658'
            ],
            [
                'tab_number' => '0356',
                'fullname' => 'Нишонов Бахромжон Эсонович',
                'passport' => 'AA9583857'
            ],
            [
                'tab_number' => '0357',
                'fullname' => 'Мамаджанов Баходир Ульмасович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0360',
                'fullname' => 'Миланин Алексей Анатольевич',
                'passport' => 'AB6374333'
            ],
            [
                'tab_number' => '0361',
                'fullname' => 'Тешабаев Рахмат Имомалиевич',
                'passport' => 'AB1167952'
            ],
            [
                'tab_number' => '0362',
                'fullname' => 'Талипджанов Уктам Нурматович',
                'passport' => 'AB1198269'
            ],
            [
                'tab_number' => '0363',
                'fullname' => 'Рахимкулов Ахрорбек Мирзабек угли',
                'passport' => 'AA0633945'
            ],
            [
                'tab_number' => '0364',
                'fullname' => 'Абдуразаков Абдувохид Джураевич',
                'passport' => 'AA7502049'
            ],
            [
                'tab_number' => '0366',
                'fullname' => 'Мамаджонов Рустам Вахобович',
                'passport' => 'AA6360377'
            ],
            [
                'tab_number' => '0370',
                'fullname' => 'Махмудов Музаффаржон Якубович',
                'passport' => 'AA5970280'
            ],
            [
                'tab_number' => '0372',
                'fullname' => 'Мелибоев Сохибжон Соибжон угли',
                'passport' => 'AA6922280'
            ],
            [
                'tab_number' => '0374',
                'fullname' => 'Маматкулов Рашид Рустамович',
                'passport' => 'AA7846431'
            ],
            [
                'tab_number' => '0375',
                'fullname' => 'Мадумаров Олимжон Орипжонович',
                'passport' => 'AA6748051'
            ],
            [
                'tab_number' => '0376',
                'fullname' => 'Юнусов Абдузохиджон Абдурашидович',
                'passport' => 'AA3867129'
            ],
            [
                'tab_number' => '0377',
                'fullname' => 'Усмоналиев Бекзод Бахтиёржон угли',
                'passport' => 'AA6288512'
            ],
            [
                'tab_number' => '0378',
                'fullname' => 'Юсупов Бекзод Баходиржон угли',
                'passport' => 'AA4459902'
            ],
            [
                'tab_number' => '0380',
                'fullname' => 'Рахмонов Муйдинжон Мамуржонович',
                'passport' => 'AA8418208'
            ],
            [
                'tab_number' => '0381',
                'fullname' => 'Тухтакулов Ибрагимжан Каримович',
                'passport' => 'AB2021022'
            ],
            [
                'tab_number' => '0383',
                'fullname' => 'Маматкулов Равшан Рустамович',
                'passport' => 'AA6435649'
            ],
            [
                'tab_number' => '0386',
                'fullname' => 'Жураев Жахонгир Уринбой угли',
                'passport' => 'AB6095854'
            ],
            [
                'tab_number' => '0388',
                'fullname' => 'Мелибаев Равшан Муйдинович',
                'passport' => 'AA3476018'
            ],
            [
                'tab_number' => '0394',
                'fullname' => 'Ортиков Давронбек Мухаммадиброхимович',
                'passport' => 'AB0457454'
            ],
            [
                'tab_number' => '0395',
                'fullname' => 'Мамадалиев Исломкул Эргашевич',
                'passport' => 'AB1301650'
            ],
            [
                'tab_number' => '0396',
                'fullname' => 'Махмудов Хасан Салиевич',
                'passport' => 'AB3682579'
            ],
            [
                'tab_number' => '0397',
                'fullname' => 'Адхамов Мухаммадали Иномжон угли',
                'passport' => 'AA0603306'
            ],
            [
                'tab_number' => '0400',
                'fullname' => 'Низамов Илхомжон Исамиддинович',
                'passport' => 'AA6339281'
            ],
            [
                'tab_number' => '0401',
                'fullname' => 'Назиров Абдулазиз Абдураззокович',
                'passport' => 'AA1849519'
            ],
            [
                'tab_number' => '0404',
                'fullname' => 'Насирдинов Азимжон Тургунович',
                'passport' => 'AA7043476'
            ],
            [
                'tab_number' => '0413',
                'fullname' => 'Назиров Абдусалом Гуломович',
                'passport' => 'AA7846473'
            ],
            [
                'tab_number' => '0431',
                'fullname' => 'Одилов Шарафибидин Зиябидинович',
                'passport' => 'AA6676923'
            ],
            [
                'tab_number' => '0432',
                'fullname' => 'Кобилов Норматжон Ташпулатович',
                'passport' => 'AB1265571'
            ],
            [
                'tab_number' => '0433',
                'fullname' => 'Олимов Гайрат Норкузиевич',
                'passport' => 'AA5819850'
            ],
            [
                'tab_number' => '0444',
                'fullname' => 'Омонбоев Рашиджон Бахромович',
                'passport' => 'AB4267232'
            ],
            [
                'tab_number' => '0461',
                'fullname' => 'Пирматов Музаффар Махкамович',
                'passport' => 'AA6339280'
            ],
            [
                'tab_number' => '0500',
                'fullname' => 'Рузматов Нормат Абдугафурович',
                'passport' => 'AA6571367'
            ],
            [
                'tab_number' => '0505',
                'fullname' => 'Рахмонов Давлатжон Ботирали угли',
                'passport' => 'AB2531480'
            ],
            [
                'tab_number' => '0516',
                'fullname' => 'Саттаров Ахроржон Икромжонович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0517',
                'fullname' => 'Сотволдиев Абдувахид Абдуманнонович',
                'passport' => 'AA6578488'
            ],
            [
                'tab_number' => '0519',
                'fullname' => 'Сайдалиев Ахмадали Абдурахимович',
                'passport' => 'AA6490161'
            ],
            [
                'tab_number' => '0521',
                'fullname' => 'Садриддинов Ахроржон Муртазакулович',
                'passport' => 'AA8451641'
            ],
            [
                'tab_number' => '0525',
                'fullname' => 'Султонов Содиржон Музахфарович',
                'passport' => 'AB1989824'
            ],
            [
                'tab_number' => '0531',
                'fullname' => 'Салиджанов Дилшод Иргашевич',
                'passport' => 'AB9619154'
            ],
            [
                'tab_number' => '0555',
                'fullname' => 'Туйчиев Мансуржон Мухаммедович',
                'passport' => 'AA6723343'
            ],
            [
                'tab_number' => '0558',
                'fullname' => 'Тошматов Одилбек Махмудович',
                'passport' => 'AA6567323'
            ],
            [
                'tab_number' => '0560',
                'fullname' => 'Тошматов Муроджон Ахмедович',
                'passport' => 'AA7400182'
            ],
            [
                'tab_number' => '0561',
                'fullname' => 'Туйчиев Максуджон Мухаммедович',
                'passport' => 'AA6899342'
            ],
            [
                'tab_number' => '0565',
                'fullname' => 'Ташматов Зафарбек Бахромович',
                'passport' => 'AA6777280'
            ],
            [
                'tab_number' => '0568',
                'fullname' => 'Тухтасинов Зохид Холмурод угли',
                'passport' => 'AA7249184'
            ],
            [
                'tab_number' => '0571',
                'fullname' => 'Турдиалиев Мадамин Мамадалиевич',
                'passport' => 'AB0052814'
            ],
            [
                'tab_number' => '0578',
                'fullname' => 'Тешабоев Мирзажон Муминович',
                'passport' => 'AB0747316'
            ],
            [
                'tab_number' => '0616',
                'fullname' => 'Умаров Баходир Эркинович',
                'passport' => 'AA6550163'
            ],
            [
                'tab_number' => '0618',
                'fullname' => 'Узаков Суннат Якубжонович',
                'passport' => 'AA0673506'
            ],
            [
                'tab_number' => '0620',
                'fullname' => 'Уринов Одил Маърупович',
                'passport' => 'AA3116586'
            ],
            [
                'tab_number' => '0623',
                'fullname' => 'Усмонкузиев Улугбек Уринбой угли',
                'passport' => 'AB4544212'
            ],
            [
                'tab_number' => '0630',
                'fullname' => 'Усманов Фарход Исраилович',
                'passport' => 'AA9821200'
            ],
            [
                'tab_number' => '0636',
                'fullname' => 'Урунов Элёр Ибрагим угли',
                'passport' => 'AA7928182'
            ],
            [
                'tab_number' => '0674',
                'fullname' => 'Холиков Эркин Худайназарович',
                'passport' => 'AB0122635'
            ],
            [
                'tab_number' => '0676',
                'fullname' => 'Ходжиматов Мадамин Рахмонжон угли',
                'passport' => 'AA7366728'
            ],
            [
                'tab_number' => '0678',
                'fullname' => 'Халилов Бахром Рахматуллаевич',
                'passport' => 'AB3119064'
            ],
            [
                'tab_number' => '0682',
                'fullname' => 'Хамраев Мухитдин Хакимович',
                'passport' => 'AA5845488'
            ],
            [
                'tab_number' => '0683',
                'fullname' => 'Ходжиматов Умид Муратович',
                'passport' => 'AA6571438'
            ],
            [
                'tab_number' => '0686',
                'fullname' => 'Халиков Рустам Исламович',
                'passport' => 'AA6748197'
            ],
            [
                'tab_number' => '0687',
                'fullname' => 'Хакимджанов Мурод Мухтарович',
                'passport' => 'AC1199515'
            ],
            [
                'tab_number' => '0690',
                'fullname' => 'Ходжаев Мавлан Мухамедович',
                'passport' => 'AA2877243'
            ],
            [
                'tab_number' => '0692',
                'fullname' => 'Худаёров Фазлиддин Юлдашбоевич',
                'passport' => 'AA8526758'
            ],
            [
                'tab_number' => '0693',
                'fullname' => 'Худаяров Илхом Маматкосимович',
                'passport' => 'AB0733498'
            ],
            [
                'tab_number' => '0697',
                'fullname' => 'Хайдаров Зарифжон Мухаммадович',
                'passport' => 'AA7816272'
            ],
            [
                'tab_number' => '0704',
                'fullname' => 'Хакимов Салиджан Алимович',
                'passport' => 'AB1361911'
            ],
            [
                'tab_number' => '0705',
                'fullname' => 'Муродов Пулатбой Тоштемирович',
                'passport' => 'AA2352574'
            ],
            [
                'tab_number' => '0707',
                'fullname' => 'Шакиров Ахрор Ахмедович',
                'passport' => 'AA6924397'
            ],
            [
                'tab_number' => '0708',
                'fullname' => 'Рахмонов Азиз Абдуллаевич',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0715',
                'fullname' => 'Турсунова Холисхон Рузматовна',
                'passport' => 'AB8120590'
            ],
            [
                'tab_number' => '0716',
                'fullname' => 'Юлдашев Ахроржон Толибович',
                'passport' => 'AB2559384'
            ],
            [
                'tab_number' => '0726',
                'fullname' => 'Нишонбоев Жуманбой Абдумаликович',
                'passport' => 'AB0610801'
            ],
            [
                'tab_number' => '0729',
                'fullname' => 'Шерматов Валижон Акрамович',
                'passport' => 'AA2650129'
            ],
            [
                'tab_number' => '0730',
                'fullname' => 'Сотволдиев Ахатджон Иномович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0735',
                'fullname' => 'Комилов Сардорбек Сирожиддин угли',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0737',
                'fullname' => 'Усманов Кахрамон Мадаминович',
                'passport' => 'AA2319976'
            ],
            [
                'tab_number' => '0740',
                'fullname' => 'Оллоёров Фарходжон Урунович',
                'passport' => 'AB1143245'
            ],
            [
                'tab_number' => '0741',
                'fullname' => 'Джураев Лочин Сайдуллаевич',
                'passport' => 'AB1166986'
            ],
            [
                'tab_number' => '0744',
                'fullname' => 'Косимов Мансуржон Махмуджон угли',
                'passport' => 'AB6874203'
            ],
            [
                'tab_number' => '0745',
                'fullname' => 'Холикова Наргизахон Якубжоновна',
                'passport' => 'AB1136479'
            ],
            [
                'tab_number' => '0754',
                'fullname' => 'Жураева Дилоромхон Абдуллаевна',
                'passport' => 'AA7941630'
            ],
            [
                'tab_number' => '0756',
                'fullname' => 'Хакназаров Акбар Абдурахимович',
                'passport' => 'AB6668986'
            ],
            [
                'tab_number' => '0762',
                'fullname' => 'Шодиев Достонжон Курвонали угли',
                'passport' => 'AA6530954'
            ],
            [
                'tab_number' => '0764',
                'fullname' => 'Юнусова Фатима Абдуллаевна',
                'passport' => 'AB1170199'
            ],
            [
                'tab_number' => '0765',
                'fullname' => 'Исаков Музаффаржон Мадаминович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0767',
                'fullname' => 'Имомназарова Зироатхон Мамадалиевна',
                'passport' => 'AB6129035'
            ],
            [
                'tab_number' => '0769',
                'fullname' => 'Каримов Абдумалик Назирович',
                'passport' => 'AA2276006'
            ],
            [
                'tab_number' => '0770',
                'fullname' => 'Шукуралиев Азаматжон Хидирали угли',
                'passport' => 'AB0819548'
            ],
            [
                'tab_number' => '0773',
                'fullname' => 'Шеркузиев Хамдам Турсунович',
                'passport' => 'AB1347120'
            ],
            [
                'tab_number' => '0775',
                'fullname' => 'Лисицын Дмитрий Анатольевич',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0777',
                'fullname' => 'Пайзиматов Шохрух Абдумаджитович',
                'passport' => 'AA6572521'
            ],
            [
                'tab_number' => '0785',
                'fullname' => 'Иргашева Феруза Хасановна',
                'passport' => 'AB0122643'
            ],
            [
                'tab_number' => '0786',
                'fullname' => 'Исаков Нуриддин Жамолиддин угли',
                'passport' => 'AA6405163'
            ],
            [
                'tab_number' => '0790',
                'fullname' => 'Хакимов Яхё Мухторович',
                'passport' => 'AA5738260'
            ],
            [
                'tab_number' => '0792',
                'fullname' => 'Тургунбоев Алижон Якубжон угли',
                'passport' => 'AA0560619'
            ],
            [
                'tab_number' => '0798',
                'fullname' => 'Хасанов Ихтиёржон Исломжон угли',
                'passport' => 'AB0715983'
            ],
            [
                'tab_number' => '0800',
                'fullname' => 'Исмоилов Ахмаджон Расулович',
                'passport' => 'AA3177583'
            ],
            [
                'tab_number' => '0803',
                'fullname' => 'Каримов Анваржон Назирович',
                'passport' => 'AA1712767'
            ],
            [
                'tab_number' => '0804',
                'fullname' => 'Эргашев Кадир Ахмедович',
                'passport' => 'AC0213132'
            ],
            [
                'tab_number' => '0806',
                'fullname' => 'Мамажонов Дилшоджон Рашиджон угли',
                'passport' => 'AA8129123'
            ],
            [
                'tab_number' => '0807',
                'fullname' => 'Мазакиров Мукум Гаппарович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0809',
                'fullname' => 'Хайдаров Ихтиёржон Муминжон угли',
                'passport' => 'AA0527144'
            ],
            [
                'tab_number' => '0811',
                'fullname' => 'Икромов Камолиддин Хусниддин угли',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '0830',
                'fullname' => 'Мамаризаева Азиза Пулатовна',
                'passport' => 'AA5828587'
            ],
            [
                'tab_number' => '0831',
                'fullname' => 'Хайдарова Кундузхон Зокиржановна',
                'passport' => 'AA0624007'
            ],
            [
                'tab_number' => '0837',
                'fullname' => 'Кобилов Акбаржон Абдуллаевич',
                'passport' => 'AB1361771'
            ],
            [
                'tab_number' => '0845',
                'fullname' => 'Бегматов Носиржон Курбоналиевич',
                'passport' => 'AA3674499'
            ],
            [
                'tab_number' => '0846',
                'fullname' => 'Рузматов Мухторжон Мадаминович',
                'passport' => 'AA8594575'
            ],
            [
                'tab_number' => '0855',
                'fullname' => 'Якубов Бахтиёрбек Бокибекович',
                'passport' => 'AA8081044'
            ],
            [
                'tab_number' => '0892',
                'fullname' => 'Усмонов Мухаммаджон Муйдинович',
                'passport' => 'AA2083651'
            ],
            [
                'tab_number' => '0906',
                'fullname' => 'Мирахмедов Турсун Ирматович',
                'passport' => 'AB1056502'
            ],
            [
                'tab_number' => '1015',
                'fullname' => 'Джалилов Рахматали Шавкатович',
                'passport' => 'AB1068630'
            ],
            [
                'tab_number' => '1019',
                'fullname' => 'Сайфидинов Бахтиёр Мамирович',
                'passport' => 'AA1098174'
            ],
            [
                'tab_number' => '1020',
                'fullname' => 'Акрамов Равшан Тошкузиевич',
                'passport' => 'AA0695654'
            ],
            [
                'tab_number' => '1026',
                'fullname' => 'Кенжаев Бахтиёржон Долимжонович',
                'passport' => 'AB0540931'
            ],
            [
                'tab_number' => '1028',
                'fullname' => 'Курбонов Кулдашали Мамазияевич',
                'passport' => 'AA7666760'
            ],
            [
                'tab_number' => '1030',
                'fullname' => 'Бакиров Икромжон Нуманович',
                'passport' => 'AB0706551'
            ],
            [
                'tab_number' => '1031',
                'fullname' => 'Бакиров Махмуджон Нумонович',
                'passport' => 'AA1391122'
            ],
            [
                'tab_number' => '1033',
                'fullname' => 'Обидов Акрамжон Махмуджонович',
                'passport' => 'AB0121680'
            ],
            [
                'tab_number' => '1034',
                'fullname' => 'Мадвалиев Фарходжон Уктамович',
                'passport' => 'AB5180145'
            ],
            [
                'tab_number' => '1035',
                'fullname' => 'Рахмонов Абдугани Тулкунбаевич',
                'passport' => 'AA1391358'
            ],
            [
                'tab_number' => '1036',
                'fullname' => 'Гапиров Авазбек Алижонович',
                'passport' => 'AA7645295'
            ],
            [
                'tab_number' => '1037',
                'fullname' => 'Давронов Сойибжон Акрамович',
                'passport' => 'AB6358289'
            ],
            [
                'tab_number' => '1038',
                'fullname' => 'Давронов Дилмурод Акрамович',
                'passport' => 'AB0463452'
            ],
            [
                'tab_number' => '1107',
                'fullname' => 'Нормахаматов Шохрухмирзо Ботирали угли',
                'passport' => 'AA1591977'
            ],
            [
                'tab_number' => '1109',
                'fullname' => 'Курбонов Нумон Омонович',
                'passport' => 'AB1501966'
            ],
            [
                'tab_number' => '1113',
                'fullname' => 'Ахмедов Ихтиёр Кодирович',
                'passport' => 'AA5012298'
            ],
            [
                'tab_number' => '1118',
                'fullname' => 'Собиров Умиджон Ярослав угли',
                'passport' => 'AB1347829'
            ],
            [
                'tab_number' => '1119',
                'fullname' => 'Хомиджонов Шахбоз Неъматжон угли',
                'passport' => 'AA7178076'
            ],
            [
                'tab_number' => '1122',
                'fullname' => 'Тохиров Шерзоджон Зафаржон угли',
                'passport' => 'AA2919987'
            ],
            [
                'tab_number' => '1129',
                'fullname' => 'Пулатов Баходир Набиевич',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '1131',
                'fullname' => 'Мадаминов Умиджон Умаржон угли',
                'passport' => 'AB4453630'
            ],
            [
                'tab_number' => '1133',
                'fullname' => 'Абдуллаев Сардоржон Ахатович',
                'passport' => 'AA1268142'
            ],
            [
                'tab_number' => '1135',
                'fullname' => 'Каримов Ботир Алиевич',
                'passport' => 'AB1989466'
            ],
            [
                'tab_number' => '1140',
                'fullname' => 'Карабаев Туланбек Рустамович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '1149',
                'fullname' => 'Таджиев Равшан Исакович',
                'passport' => 'AA3076007'
            ],
            [
                'tab_number' => '1173',
                'fullname' => 'Турсунов Жамшидбек Равшанжон угли',
                'passport' => 'AA2517755'
            ],
            [
                'tab_number' => '1201',
                'fullname' => 'Болтабоев Ойбек Юлдашевич',
                'passport' => 'AB6169069'
            ],
            [
                'tab_number' => '1203',
                'fullname' => 'Хидиров Аликузи Жалолович',
                'passport' => 'AB2100656'
            ],
            [
                'tab_number' => '1207',
                'fullname' => 'Давлатов Аъзамжон Саминович',
                'passport' => 'AA3941771'
            ],
            [
                'tab_number' => '1208',
                'fullname' => 'Журабоев Мадаминжон Муталибжонович',
                'passport' => 'AA7619926'
            ],
            [
                'tab_number' => '1209',
                'fullname' => 'Арипов Юсуф Юлдашевич',
                'passport' => 'AA5210247'
            ],
            [
                'tab_number' => '1210',
                'fullname' => 'Мансуров Машраб Салиджонович',
                'passport' => 'AA8291262'
            ],
            [
                'tab_number' => '1211',
                'fullname' => 'Холматов Ахаджон Ахмедович',
                'passport' => 'AC0848119'
            ],
            [
                'tab_number' => '1212',
                'fullname' => 'Туйчибоев Зайнобиддин Нурмухаммадович',
                'passport' => 'AA5713739'
            ],
            [
                'tab_number' => '1213',
                'fullname' => 'Журабаев Зайлобидин Юлдашалиевич',
                'passport' => 'AC1677613'
            ],
            [
                'tab_number' => '1214',
                'fullname' => 'Турдибаев Бахром Нематович',
                'passport' => 'AA6652664'
            ],
            [
                'tab_number' => '1215',
                'fullname' => 'Ибрагимов Араббой Абдурахимович',
                'passport' => 'AA6578506'
            ],
            [
                'tab_number' => '1216',
                'fullname' => 'Якубов Адхам Ахмедович',
                'passport' => 'AB3605022'
            ],
            [
                'tab_number' => '1217',
                'fullname' => 'Исмаилов Кобилжон Махамадович',
                'passport' => 'AB0107004'
            ],
            [
                'tab_number' => '1218',
                'fullname' => 'Тошпулатов Бахтияр Курбанович',
                'passport' => 'AA4306401'
            ],
            [
                'tab_number' => '1219',
                'fullname' => 'Йулдашев Улугбек Ойбек угли',
                'passport' => 'AA9912036'
            ],
            [
                'tab_number' => '1221',
                'fullname' => 'Хатамкулов Рахматали Акбарович',
                'passport' => 'AA1640929'
            ],
            [
                'tab_number' => '1222',
                'fullname' => 'Валиев Абдусамат Абдумаликович',
                'passport' => 'AA1651320'
            ],
            [
                'tab_number' => '1229',
                'fullname' => 'Аскаров Икромджон Умарович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '1230',
                'fullname' => 'Турсунов Мухаммад Иргашович',
                'passport' => 'AB8944337'
            ],
            [
                'tab_number' => '1232',
                'fullname' => 'Каримов Хасанжон Рахимович',
                'passport' => 'AA8810879'
            ],
            [
                'tab_number' => '1236',
                'fullname' => 'Юлдашев Мурат Замзамович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '1239',
                'fullname' => 'Камолдинов Ахунжон Ахмедович',
                'passport' => 'AA7488406'
            ],
            [
                'tab_number' => '1242',
                'fullname' => 'Нурматов Нуманжон Турсунович',
                'passport' => 'AB2475430'
            ],
            [
                'tab_number' => '1247',
                'fullname' => 'Каримов Абдурахман Бойпулатович',
                'passport' => 'AA1590076'
            ],
            [
                'tab_number' => '1257',
                'fullname' => 'Маматкулов Анвармирзо Абдурахимжон угли',
                'passport' => 'AA4126678'
            ],
            [
                'tab_number' => '1262',
                'fullname' => 'Саминов Давлатжон Машрабжон угли',
                'passport' => 'AA4293120'
            ],
            [
                'tab_number' => '1263',
                'fullname' => 'Усмонов Шукурали Гафурович',
                'passport' => 'AA0891054'
            ],
            [
                'tab_number' => '1265',
                'fullname' => 'Пулатов Бархаётжон Сидикович',
                'passport' => 'AA4398968'
            ],
            [
                'tab_number' => '1266',
                'fullname' => 'Бахтиёров Бархаётжон Тулкинжон угли',
                'passport' => 'AA7883493'
            ],
            [
                'tab_number' => '1270',
                'fullname' => 'Хатамов Хожиакбар Ортикжон угли',
                'passport' => 'AA7941578'
            ],
            [
                'tab_number' => '1274',
                'fullname' => 'Сайдалиев Расулжон Абдурахим угли',
                'passport' => 'AA0673702'
            ],
            [
                'tab_number' => '1301',
                'fullname' => 'Гуломов Баходир Маъмурович',
                'passport' => 'AA6649602'
            ],
            [
                'tab_number' => '1302',
                'fullname' => 'Уринбаев Ботир Киргизович',
                'passport' => 'AA7696498'
            ],
            [
                'tab_number' => '1303',
                'fullname' => 'Кадиров Отабек Юлдашевич',
                'passport' => 'AA6702618'
            ],
            [
                'tab_number' => '1305',
                'fullname' => 'Дададжанов Бахтиёр Набиевич',
                'passport' => 'AA2683165'
            ],
            [
                'tab_number' => '1306',
                'fullname' => 'Бозарбаев Асилжон Алижонович',
                'passport' => 'AA8873559'
            ],
            [
                'tab_number' => '1307',
                'fullname' => 'Обидов Умиджон Гуломкодир угли',
                'passport' => 'AB1616007'
            ],
            [
                'tab_number' => '1308',
                'fullname' => 'Нуралиев Абдурасул Асилжон угли',
                'passport' => 'AA6993995'
            ],
            [
                'tab_number' => '1309',
                'fullname' => 'Ахмедов Равшанбек Рахматович',
                'passport' => 'AA6649779'
            ],
            [
                'tab_number' => '1310',
                'fullname' => 'Ахмедов Хайруло Хабибуллаевич',
                'passport' => 'AA0934354'
            ],
            [
                'tab_number' => '1311',
                'fullname' => 'Маматов Акбар Акмалович',
                'passport' => 'AA0867533'
            ],
            [
                'tab_number' => '1312',
                'fullname' => 'Иброхимов Абдулла Сотволди угли',
                'passport' => 'AB2080238'
            ],
            [
                'tab_number' => '1314',
                'fullname' => 'Махсудов Мухаммадамирмирзо Тулкин угли',
                'passport' => 'AB6355960'
            ],
            [
                'tab_number' => '1316',
                'fullname' => 'Мамасидиков Шухратжон Кобилович',
                'passport' => 'AA4178419'
            ],
            [
                'tab_number' => '1317',
                'fullname' => 'Муминов Дониёр Дилмуродович',
                'passport' => 'AA0925225'
            ],
            [
                'tab_number' => '1318',
                'fullname' => 'Асилжонов Фарходжон Муроджон угли',
                'passport' => 'AA7690079'
            ],
            [
                'tab_number' => '1321',
                'fullname' => 'Саримсаков Хабибулла Уринбаевич',
                'passport' => 'AA7952906'
            ],
            [
                'tab_number' => '1323',
                'fullname' => 'Карабаев Олим Набижанович',
                'passport' => 'AA8677979'
            ],
            [
                'tab_number' => '1324',
                'fullname' => 'Холбеков Адхам Исакович',
                'passport' => 'AA6359803'
            ],
            [
                'tab_number' => '1342',
                'fullname' => 'Косимов Шухрат Иброхимович',
                'passport' => 'AA5512509'
            ],
            [
                'tab_number' => '1346',
                'fullname' => 'Турдибаев Хабибулло Нематович',
                'passport' => 'AB1000856'
            ],
            [
                'tab_number' => '1347',
                'fullname' => 'Рахмонов Икромжон Ахмадалиевич',
                'passport' => 'AA1970435'
            ],
            [
                'tab_number' => '1348',
                'fullname' => 'Марупов Сарварбек Анварович',
                'passport' => 'AA6512067'
            ],
            [
                'tab_number' => '1352',
                'fullname' => 'Ядгаров Акбархужа Акрамхужаевич',
                'passport' => 'AA3889448'
            ],
            [
                'tab_number' => '1354',
                'fullname' => 'Каримов Арабжон Нуъмонжонович',
                'passport' => 'AA1648988'
            ],
            [
                'tab_number' => '1355',
                'fullname' => 'Погодина Валентина Александровна',
                'passport' => 'AA3267474'
            ],
            [
                'tab_number' => '1357',
                'fullname' => 'Сохибов Максуджон Хаётжон угли',
                'passport' => 'AA8674410'
            ],
            [
                'tab_number' => '1358',
                'fullname' => 'Каримов Шовкатжон Нуъмонович',
                'passport' => 'AB1045327'
            ],
            [
                'tab_number' => '1360',
                'fullname' => 'Назиров Хабибулло Каримович',
                'passport' => 'AA7516589'
            ],
            [
                'tab_number' => '1362',
                'fullname' => 'Джурабоев Искандаржон Тохирович',
                'passport' => 'AB1001391'
            ],
            [
                'tab_number' => '1363',
                'fullname' => 'Джалилова Хилола Холматовна',
                'passport' => 'AB6425648'
            ],
            [
                'tab_number' => '1364',
                'fullname' => 'Каюмжонов Кобилжон Косимжон угли',
                'passport' => 'AA1134385'
            ],
            [
                'tab_number' => '1369',
                'fullname' => 'Жураев Жамшидбек Шовкатович',
                'passport' => 'AB1301702'
            ],
            [
                'tab_number' => '1370',
                'fullname' => 'Абдувохобов Абдукаххар Абдурашидович',
                'passport' => 'AB2962792'
            ],
            [
                'tab_number' => '1372',
                'fullname' => 'Пулатов Авазхон Дилмуроджон угли',
                'passport' => 'AA4662816'
            ],
            [
                'tab_number' => '1375',
                'fullname' => 'Куконбоев Жамшиджон Тургунбаевич',
                'passport' => 'AA5227809'
            ],
            [
                'tab_number' => '1377',
                'fullname' => 'Мадумаров Косимжон Каюмович',
                'passport' => 'AB1143986'
            ],
            [
                'tab_number' => '1380',
                'fullname' => 'Рахматов Бахтиёр Аманович',
                'passport' => 'AA2318255'
            ],
            [
                'tab_number' => '1382',
                'fullname' => 'Бурхонов Элдоржон Эргашали угли',
                'passport' => 'AA2987989'
            ],
            [
                'tab_number' => '1383',
                'fullname' => 'Сатвалдиев Аъзам Нематович',
                'passport' => 'AA9346726'
            ],
            [
                'tab_number' => '1384',
                'fullname' => 'Юлдашев Бахтиёр Назирович',
                'passport' => 'AA3701599'
            ],
            [
                'tab_number' => '1389',
                'fullname' => 'Каримов Абдулбосит  Халилович',
                'passport' => 'AA7941585'
            ],
            [
                'tab_number' => '1392',
                'fullname' => 'Мамажонов Дилшод Ахмедович',
                'passport' => 'AB3376598'
            ],
            [
                'tab_number' => '1507',
                'fullname' => 'Абдурахмонова Шахида Ядгаровна',
                'passport' => 'AB0984635'
            ],
            [
                'tab_number' => '1512',
                'fullname' => 'Валиева Дилнорахон Азамовна',
                'passport' => 'AA6293404'
            ],
            [
                'tab_number' => '1514',
                'fullname' => 'Назарова Турсуной Джумановна',
                'passport' => 'AB8009369'
            ],
            [
                'tab_number' => '1545',
                'fullname' => 'Усмонова Зумрадхон Косимжоновна',
                'passport' => 'AA0698945'
            ],
            [
                'tab_number' => '1547',
                'fullname' => 'Аскарова Комила Рахмановна',
                'passport' => 'AA6297903'
            ],
            [
                'tab_number' => '1550',
                'fullname' => 'Рахимова Нозимахон Юсупходжаевна',
                'passport' => 'AA7816063'
            ],
            [
                'tab_number' => '1553',
                'fullname' => 'Холматова Майрам Рахмановна',
                'passport' => 'AA5374663'
            ],
            [
                'tab_number' => '1557',
                'fullname' => 'Камбарова Ойшахон Джабборовна',
                'passport' => 'AB8422100'
            ],
            [
                'tab_number' => '1652',
                'fullname' => 'Искандарова Мамлакат Рахимовна',
                'passport' => 'AB1618698'
            ],
            [
                'tab_number' => '1661',
                'fullname' => 'Махмудов Лазизжон Бахромжон угли',
                'passport' => 'AB3519109'
            ],
            [
                'tab_number' => '1662',
                'fullname' => 'Хасанов Дилшоджон Алижонович',
                'passport' => 'AB1166519'
            ],
            [
                'tab_number' => '1667',
                'fullname' => 'Махмудов Одилжон Уктамович',
                'passport' => 'AB6114345'
            ],
            [
                'tab_number' => '1670',
                'fullname' => 'Алиева Наргиза Адхамжон кизи',
                'passport' => 'AB4169125'
            ],
            [
                'tab_number' => '1752',
                'fullname' => 'Рузматов Мухиддинжон Мадаминович',
                'passport' => 'AA4529227'
            ],
            [
                'tab_number' => '1753',
                'fullname' => 'Носиров Хаётжон Каюмович',
                'passport' => 'AB1237223'
            ],
            [
                'tab_number' => '1765',
                'fullname' => 'Мадалиев Шавкат Мухамаджанович',
                'passport' => 'AA8460079'
            ],
            [
                'tab_number' => '1767',
                'fullname' => 'Исаков Мадаминжон Ражабович',
                'passport' => 'AB1123611'
            ],
            [
                'tab_number' => '1770',
                'fullname' => 'Усмоналиев Бахтиёржон Рахмонович',
                'passport' => 'AB0695438'
            ],
            [
                'tab_number' => '1778',
                'fullname' => 'Искандаров Жахонгир Рашидович',
                'passport' => 'AA0580410'
            ],
            [
                'tab_number' => '1779',
                'fullname' => 'Хусанбоев Маликжон Туробович',
                'passport' => 'AA1024474'
            ],
            [
                'tab_number' => '1781',
                'fullname' => 'Курбонов Махмуджон Махаммедович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '1782',
                'fullname' => 'Хаджаев Масрурхужа Мамурхужа угли',
                'passport' => 'AA2579128'
            ],
            [
                'tab_number' => '1784',
                'fullname' => 'Рахимов Эркинджон Муминович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '1786',
                'fullname' => 'Орипов Жуманбой Умматович',
                'passport' => 'AA2274526'
            ],
            [
                'tab_number' => '1788',
                'fullname' => 'Мамажонов Одилжон Обидович',
                'passport' => 'AB5735940'
            ],
            [
                'tab_number' => '1790',
                'fullname' => 'Аминов Азизжон Уринбой угли',
                'passport' => 'AB7010352'
            ],
            [
                'tab_number' => '1795',
                'fullname' => 'Бойназаров Абдухафиз Саминович',
                'passport' => 'AB8343240'
            ],
            [
                'tab_number' => '1854',
                'fullname' => 'Камолов Абдурахимхон Комилович',
                'passport' => 'AA2625896'
            ],
            [
                'tab_number' => '1855',
                'fullname' => 'Фозилов Фарход Фахритдинович',
                'passport' => 'AB3889037'
            ],
            [
                'tab_number' => '1857',
                'fullname' => 'Ходжаев Равшан Мухамедович',
                'passport' => 'AA3829382'
            ],
            [
                'tab_number' => '1858',
                'fullname' => 'Патрин Сергей Владимирович',
                'passport' => 'AA6439831'
            ],
            [
                'tab_number' => '1860',
                'fullname' => 'Ниязова Махфузахон Мухаммаджановна',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '1861',
                'fullname' => 'Юлдашева Хадяхон Якубовна',
                'passport' => 'AA7846526'
            ],
            [
                'tab_number' => '1864',
                'fullname' => 'Усмонова Диляра Маратовна',
                'passport' => 'AC0379640'
            ],
            [
                'tab_number' => '1872',
                'fullname' => 'Холматов Дилшод Назирович',
                'passport' => 'AC0841847'
            ],
            [
                'tab_number' => '1876',
                'fullname' => 'Ишматова Анора Пулатовна',
                'passport' => 'AA4161211'
            ],
            [
                'tab_number' => '1877',
                'fullname' => 'Омонов Илхом Ахадович',
                'passport' => 'AA6490259'
            ],
            [
                'tab_number' => '1878',
                'fullname' => 'Матмуратова Мухаббатхон Абдурахмоновна',
                'passport' => 'AA5015042'
            ],
            [
                'tab_number' => '1881',
                'fullname' => 'Файзиев Рустам Расулович',
                'passport' => 'AB0480873'
            ],
            [
                'tab_number' => '1882',
                'fullname' => 'Атаджанова Зулхумор Маруповна',
                'passport' => 'AB1713490'
            ],
            [
                'tab_number' => '1883',
                'fullname' => 'Хасанова Дилором Гуломовна',
                'passport' => 'AB7715127'
            ],
            [
                'tab_number' => '1884',
                'fullname' => 'Рузиматова Машхура Рахимовна',
                'passport' => 'AA3651436'
            ],
            [
                'tab_number' => '1886',
                'fullname' => 'Гафуров Бахром Боходирович',
                'passport' => 'AA7489011'
            ],
            [
                'tab_number' => '1890',
                'fullname' => 'Комилова Машхурахон Халимовна',
                'passport' => 'AC0842581'
            ],
            [
                'tab_number' => '1895',
                'fullname' => 'Салиходжаев Нормат Юлдашевич',
                'passport' => 'AB1537395'
            ],
            [
                'tab_number' => '1901',
                'fullname' => 'Солиев Зиёдали Гафурович',
                'passport' => 'AA9319931'
            ],
            [
                'tab_number' => '1903',
                'fullname' => 'Миртожиев Улугбек Сатторович',
                'passport' => 'AA1644746'
            ],
            [
                'tab_number' => '1907',
                'fullname' => 'Мавлонов Дилмурод Исмоилович',
                'passport' => 'AB0305915'
            ],
            [
                'tab_number' => '1908',
                'fullname' => 'Маматкулов Ёркинжон Шарифжон угли',
                'passport' => 'AA7719623'
            ],
            [
                'tab_number' => '1909',
                'fullname' => 'Ортиков Алишер Махмудович',
                'passport' => 'AA7984770'
            ],
            [
                'tab_number' => '1911',
                'fullname' => 'Солиев Голибжон Гофурович',
                'passport' => 'AA8314099'
            ],
            [
                'tab_number' => '1914',
                'fullname' => 'Хошимов Абдурахим Турсунович',
                'passport' => 'AB8426199'
            ],
            [
                'tab_number' => '1916',
                'fullname' => 'Холматов Комилжон Буриевич',
                'passport' => 'AA7196661'
            ],
            [
                'tab_number' => '1917',
                'fullname' => 'Аширалиев Икромали Рахмонович',
                'passport' => 'AB1339220'
            ],
            [
                'tab_number' => '1919',
                'fullname' => 'Эргашев Иброхим Сотиболдиевич',
                'passport' => 'AB0664018'
            ],
            [
                'tab_number' => '1920',
                'fullname' => 'Шеров Умид Махаммадумарович',
                'passport' => 'AA1644739'
            ],
            [
                'tab_number' => '1921',
                'fullname' => 'Жумабоев Толибжон Сатторович',
                'passport' => 'AA1644749'
            ],
            [
                'tab_number' => '1925',
                'fullname' => 'Умурзаков Хусниддин Мухторович',
                'passport' => 'AB7710769'
            ],
            [
                'tab_number' => '1928',
                'fullname' => 'Абдурахманов Маъмур Мухсинджонович',
                'passport' => 'AA0933403'
            ],
            [
                'tab_number' => '1929',
                'fullname' => 'Мадумаров Шавкат Иноятович',
                'passport' => 'AA9988689'
            ],
            [
                'tab_number' => '1931',
                'fullname' => 'Юнусов Хондамир Бахромжон угли',
                'passport' => 'AB4295750'
            ],
            [
                'tab_number' => '1932',
                'fullname' => 'Мамаджанов Адил Махмудович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '1943',
                'fullname' => 'Эвадуллаев Худоберди Нуъмонжон угли',
                'passport' => 'AA9055284'
            ],
            [
                'tab_number' => '1944',
                'fullname' => 'Комилов Зойиржон Усмоналиевич',
                'passport' => 'AB5757782'
            ],
            [
                'tab_number' => '1946',
                'fullname' => 'Арипов Ровшан Расулович',
                'passport' => 'AA2462408'
            ],
            [
                'tab_number' => '1947',
                'fullname' => 'Азимов Муслимжон Авазжон угли',
                'passport' => 'AA1931605'
            ],
            [
                'tab_number' => '1950',
                'fullname' => 'Холматов Рузимат Ахмедович',
                'passport' => 'AA3022192'
            ],
            [
                'tab_number' => '2000',
                'fullname' => 'Рахимов Азиз Анварович',
                'passport' => 'AA2735317'
            ],
            [
                'tab_number' => '2002',
                'fullname' => 'Акбаров Илгоржон Ортикбой угли',
                'passport' => 'AA8774824'
            ],
            [
                'tab_number' => '2004',
                'fullname' => 'Анваров Достон Бахромжон угли',
                'passport' => 'AA7891770'
            ],
            [
                'tab_number' => '2007',
                'fullname' => 'Акрамов Дилмуроджон Шарипович',
                'passport' => 'AA7495089'
            ],
            [
                'tab_number' => '2009',
                'fullname' => 'Ахраров Жахонгир Бахромович',
                'passport' => 'AA4351758'
            ],
            [
                'tab_number' => '2010',
                'fullname' => 'Акрамов Ахрор Акмалжон угли',
                'passport' => 'AA2305700'
            ],
            [
                'tab_number' => '2011',
                'fullname' => 'Алижонов Азаматжон Азизжон угли',
                'passport' => 'AB7427332'
            ],
            [
                'tab_number' => '2012',
                'fullname' => 'Алимов Сардоржон Гайратович1',
                'passport' => 'AA5946947'
            ],
            [
                'tab_number' => '2013',
                'fullname' => 'Акбаров Шерзоджон Йигиталиевич',
                'passport' => 'AB8427375'
            ],
            [
                'tab_number' => '2014',
                'fullname' => 'Аъзамов Маъруфжон Мукимжон угли',
                'passport' => 'AA5223792'
            ],
            [
                'tab_number' => '2016',
                'fullname' => 'Абдурахимов Муродали Тохиржон угли',
                'passport' => 'AA2681688'
            ],
            [
                'tab_number' => '2017',
                'fullname' => 'Абдупаттоев Ахмаджон Мухаммаджон угли',
                'passport' => 'AA2797197'
            ],
            [
                'tab_number' => '2018',
                'fullname' => 'Ахмадалиев Сардор Бахтиёржон угли',
                'passport' => 'AA8167326'
            ],
            [
                'tab_number' => '2020',
                'fullname' => 'Абдуллаев Зокиржон Холдарович',
                'passport' => 'AB1692348'
            ],
            [
                'tab_number' => '2021',
                'fullname' => 'Абдурашидов Улугбек Абдусаттор угли',
                'passport' => 'AA7170136'
            ],
            [
                'tab_number' => '2027',
                'fullname' => 'Акрамов Баходиржон Бахтиёржон угли',
                'passport' => 'AB5320609'
            ],
            [
                'tab_number' => '2040',
                'fullname' => 'Арипов Азиз Юлдашевич',
                'passport' => 'AB1059671'
            ],
            [
                'tab_number' => '2045',
                'fullname' => 'Алиев Бехзоджон Усмонжон угли',
                'passport' => 'AA7886086'
            ],
            [
                'tab_number' => '2053',
                'fullname' => 'Атакузиев Икромжон Маматкулович',
                'passport' => 'AA1047884'
            ],
            [
                'tab_number' => '2055',
                'fullname' => 'Турсунов Азизжон Фарходжон угли',
                'passport' => 'AA8604434'
            ],
            [
                'tab_number' => '2066',
                'fullname' => 'Бердикулов Абдумалик Хасанович',
                'passport' => 'AB7389022'
            ],
            [
                'tab_number' => '2070',
                'fullname' => 'Билолов Маъруфхужа Мухаммадхужа угли',
                'passport' => 'AA6968873'
            ],
            [
                'tab_number' => '2074',
                'fullname' => 'Бокибеков Дониёрбек Бахтиёрбек угли',
                'passport' => 'AA8073498'
            ],
            [
                'tab_number' => '2077',
                'fullname' => 'Валижонов Бобуржон Ёркинжон угли',
                'passport' => 'AA6079716'
            ],
            [
                'tab_number' => '2082',
                'fullname' => 'Тиллабаев Мухсинжон Мухитдинович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '2100',
                'fullname' => 'Назаров Жахонгир Акмалжон угли',
                'passport' => 'AB0819252'
            ],
            [
                'tab_number' => '2114',
                'fullname' => 'Мирзаджанов Мирзашахзод Мирзаакрам угли',
                'passport' => 'AA6287414'
            ],
            [
                'tab_number' => '2115',
                'fullname' => 'Тиркашев Бобомурод Дилмурод угли',
                'passport' => 'AA5232858'
            ],
            [
                'tab_number' => '2116',
                'fullname' => 'Эназаров Рустамжон Рахмоналиевич',
                'passport' => 'AA5936494'
            ],
            [
                'tab_number' => '2118',
                'fullname' => 'Иброхимов Абдул Вохиджон Равшанжон угли',
                'passport' => 'AB4847225'
            ],
            [
                'tab_number' => '2119',
                'fullname' => 'Каюмов Алишержон Хаётжон угли',
                'passport' => 'AA7399874'
            ],
            [
                'tab_number' => '2131',
                'fullname' => 'Гофуров Шукуржон Шарифжон угли',
                'passport' => 'AB1469109'
            ],
            [
                'tab_number' => '2136',
                'fullname' => 'Гуломов Зухриддин Жумабой угли',
                'passport' => 'AA2509148'
            ],
            [
                'tab_number' => '2156',
                'fullname' => 'Хитракова Зулфия Рафиковна',
                'passport' => 'AB0733332'
            ],
            [
                'tab_number' => '2157',
                'fullname' => 'Жураева Мафтуна Садиралиевна',
                'passport' => 'AA7883331'
            ],
            [
                'tab_number' => '2160',
                'fullname' => 'Юнусова Муслимахон Икромжон кизи',
                'passport' => 'AA3429865'
            ],
            [
                'tab_number' => '2161',
                'fullname' => 'Болтабоева Сарвиноз Мамадалиевна',
                'passport' => 'AB6789563'
            ],
            [
                'tab_number' => '2162',
                'fullname' => 'Файзиева Манзура Бурхановна',
                'passport' => 'AA2213158'
            ],
            [
                'tab_number' => '2164',
                'fullname' => 'Ахмаджонов Иззатжон Зокиржон угли',
                'passport' => 'AB2087318'
            ],
            [
                'tab_number' => '2167',
                'fullname' => 'Усмонов Хайрулла Улканбой угли',
                'passport' => 'AA7996871'
            ],
            [
                'tab_number' => '2172',
                'fullname' => 'Дарвишов Мухиддин Улугбек угли',
                'passport' => 'AA9014039'
            ],
            [
                'tab_number' => '2179',
                'fullname' => 'Дехконов Дилшод Юлдашевич',
                'passport' => 'AA3044259'
            ],
            [
                'tab_number' => '2180',
                'fullname' => 'Ахмедова Маърифатхон Мамадалиевна',
                'passport' => 'AA1123741'
            ],
            [
                'tab_number' => '2181',
                'fullname' => 'Халикова Анорахон Тахиржоновна',
                'passport' => 'AB4769775'
            ],
            [
                'tab_number' => '2184',
                'fullname' => 'Умурзакова Ёкутхон Баходиржон кизи',
                'passport' => 'AB3709013'
            ],
            [
                'tab_number' => '2185',
                'fullname' => 'Жураева Маликахон Мураджановна',
                'passport' => 'AA0933053'
            ],
            [
                'tab_number' => '2187',
                'fullname' => 'Муминова Шахнозахон Тулкиновна',
                'passport' => 'AA1187393'
            ],
            [
                'tab_number' => '2188',
                'fullname' => 'Хамдамова Мастурахон Рахматжон кизи',
                'passport' => 'AB8288419'
            ],
            [
                'tab_number' => '2197',
                'fullname' => 'Давронов Нумонжон Хасанбой угли',
                'passport' => 'AA1583301'
            ],
            [
                'tab_number' => '2203',
                'fullname' => 'Алимова Зилолахон Мамадалиевна',
                'passport' => 'AA9994428'
            ],
            [
                'tab_number' => '2205',
                'fullname' => 'Манзенко Ирина Викторовна',
                'passport' => 'AA2322603'
            ],
            [
                'tab_number' => '2206',
                'fullname' => 'Адрияко Кристина Нусредовна',
                'passport' => 'AB0699909'
            ],
            [
                'tab_number' => '2207',
                'fullname' => 'Джураева Мухтасархон Бахтиёржон кизи',
                'passport' => 'AA9403330'
            ],
            [
                'tab_number' => '2216',
                'fullname' => 'Ёкубов Исломжон Шокиржон угли',
                'passport' => 'AB2874142'
            ],
            [
                'tab_number' => '2231',
                'fullname' => 'Жалилов Иззатжон Файзуллажон угли',
                'passport' => 'AB6370969'
            ],
            [
                'tab_number' => '2232',
                'fullname' => 'Жабборов Рахматжон Ахаджон угли',
                'passport' => 'AB0410284'
            ],
            [
                'tab_number' => '2233',
                'fullname' => 'Журахонов Музаффархон Дадахон угли',
                'passport' => 'AA0653315'
            ],
            [
                'tab_number' => '2255',
                'fullname' => 'Зияев Дилшод Мухаммадович',
                'passport' => 'AB1177266'
            ],
            [
                'tab_number' => '2288',
                'fullname' => 'Иномжонов Илхомжон Икболжон угли',
                'passport' => 'AB1300778'
            ],
            [
                'tab_number' => '2291',
                'fullname' => 'Икромов Ойбек Носиржон угли',
                'passport' => 'AA2915911'
            ],
            [
                'tab_number' => '2300',
                'fullname' => 'Атаджанов Мухаммад Аъзамович',
                'passport' => 'AA9149255'
            ],
            [
                'tab_number' => '2305',
                'fullname' => 'Исаков Зафаржон Тохиржон угли',
                'passport' => 'AB0746357'
            ],
            [
                'tab_number' => '2306',
                'fullname' => 'Умаров Шукуржон Одилович',
                'passport' => 'AA1089765'
            ],
            [
                'tab_number' => '2307',
                'fullname' => 'Ишмухаммедов Адил Пазилович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '2310',
                'fullname' => 'Ирматов Хусан Акрамович',
                'passport' => 'AA0433184'
            ],
            [
                'tab_number' => '2315',
                'fullname' => 'Йулчиев Жахонгир Шоёдбек угли',
                'passport' => 'AA6053168'
            ],
            [
                'tab_number' => '2316',
                'fullname' => 'Ирматов Зариф Абдулхаевич',
                'passport' => 'AB4095627'
            ],
            [
                'tab_number' => '2318',
                'fullname' => 'Азамов Аёнжон Маликович',
                'passport' => 'AA4071564'
            ],
            [
                'tab_number' => '2319',
                'fullname' => 'Каримов Бархаётжон Сойибжон угли',
                'passport' => 'AA6310143'
            ],
            [
                'tab_number' => '2320',
                'fullname' => 'Мелибоев Мансуржон Мухаммад угли',
                'passport' => 'AB2623088'
            ],
            [
                'tab_number' => '2321',
                'fullname' => 'Маматкулов Ахмаджон Махмуджон угли',
                'passport' => 'AA1434001'
            ],
            [
                'tab_number' => '2322',
                'fullname' => 'Эргашев Жамшидбек Мухторали угли',
                'passport' => 'AA2186423'
            ],
            [
                'tab_number' => '2325',
                'fullname' => 'Ёкубов Мухаммаджон Музаффаржон угли',
                'passport' => 'AA5218925'
            ],
            [
                'tab_number' => '2326',
                'fullname' => 'Нуралиев Кахрамон Рахмонжон угли',
                'passport' => 'AB4695615'
            ],
            [
                'tab_number' => '2327',
                'fullname' => 'Мавлонов Давржон Кобилжон угли',
                'passport' => 'AA5593707'
            ],
            [
                'tab_number' => '2328',
                'fullname' => 'Кимсанов Сохибжон Содикжон угли',
                'passport' => 'AA1746347'
            ],
            [
                'tab_number' => '2330',
                'fullname' => 'Курбонов Дилшод Исроилжон угли',
                'passport' => 'AA6243387'
            ],
            [
                'tab_number' => '2331',
                'fullname' => 'Кадиров Камол Баходирович',
                'passport' => 'AB1267846'
            ],
            [
                'tab_number' => '2332',
                'fullname' => 'Косимов Сардорбек Рашиджон угли',
                'passport' => 'AA2204026'
            ],
            [
                'tab_number' => '2333',
                'fullname' => 'Юлдашев Мансур Рахманович',
                'passport' => 'AB9551261'
            ],
            [
                'tab_number' => '2335',
                'fullname' => 'Юлдашева Виктория Вячеславовна',
                'passport' => 'AA7369695'
            ],
            [
                'tab_number' => '2336',
                'fullname' => 'Азимов Халим Абдисаломович',
                'passport' => 'AB0852359'
            ],
            [
                'tab_number' => '2340',
                'fullname' => 'Отажонов Муминжон Равшанжон угли',
                'passport' => 'AB7353720'
            ],
            [
                'tab_number' => '2341',
                'fullname' => 'Лакоза Андрей Геннадьевич',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '2350',
                'fullname' => 'Касимов Ислом Усманович',
                'passport' => 'AA4279052'
            ],
            [
                'tab_number' => '2351',
                'fullname' => 'Валломатова Дилором Мухтаровна',
                'passport' => 'AC1471564'
            ],
            [
                'tab_number' => '2355',
                'fullname' => 'Мелиева Зебинисо Юнусжон кизи',
                'passport' => 'AB2739050'
            ],
            [
                'tab_number' => '2368',
                'fullname' => 'Мирахмедов Акмал  Махамадевич',
                'passport' => 'AB6785083'
            ],
            [
                'tab_number' => '2371',
                'fullname' => 'Икромов Кувондик Онаркузи угли',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '2373',
                'fullname' => 'Туронова Мархабохон Шавкат кизи',
                'passport' => 'AB7545269'
            ],
            [
                'tab_number' => '2374',
                'fullname' => 'Мамаджонова Дилором Равшановна',
                'passport' => 'AA0843559'
            ],
            [
                'tab_number' => '2375',
                'fullname' => 'Мухторов Санжарбек Абдухамид угли',
                'passport' => 'AB7193313'
            ],
            [
                'tab_number' => '2376',
                'fullname' => 'Насирдинов Жахонгир Садирдинович',
                'passport' => 'AA1859271'
            ],
            [
                'tab_number' => '2380',
                'fullname' => 'Исроилов Жавохир Машрабжон угли',
                'passport' => 'AC0373331'
            ],
            [
                'tab_number' => '2381',
                'fullname' => 'Бозоркулов Суннатилло Рахимжон угли',
                'passport' => 'AB7388922'
            ],
            [
                'tab_number' => '2386',
                'fullname' => 'Рахматуллаева Гулрух Ахматжановна',
                'passport' => 'AB1692644'
            ],
            [
                'tab_number' => '2390',
                'fullname' => 'Джалилов Икром Хакимович',
                'passport' => 'AA5022610'
            ],
            [
                'tab_number' => '2391',
                'fullname' => 'Насимов Анваржон Турсунович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '2394',
                'fullname' => 'Рузматов Хусанбой Исомиддинович',
                'passport' => 'AA4166087'
            ],
            [
                'tab_number' => '2403',
                'fullname' => 'Сотволдиев Хожиакбар Махмуджон угли',
                'passport' => 'AA9826306'
            ],
            [
                'tab_number' => '2410',
                'fullname' => 'Мамаджонов Нозим Набиевич',
                'passport' => 'AA1755712'
            ],
            [
                'tab_number' => '2416',
                'fullname' => 'Джураев Икболжон Камбарович',
                'passport' => 'AB3045217'
            ],
            [
                'tab_number' => '2421',
                'fullname' => 'Ибрагимов Шавкатжон Мухторович',
                'passport' => 'AA5280403'
            ],
            [
                'tab_number' => '2422',
                'fullname' => 'Хабибджанов Рахим Бурханович',
                'passport' => 'AA6571295'
            ],
            [
                'tab_number' => '2423',
                'fullname' => 'Пирназаров Абдурауф Рафикжон угли',
                'passport' => 'AA2805791'
            ],
            [
                'tab_number' => '2437',
                'fullname' => 'Рахимов Умиджон Равшанжон угли',
                'passport' => 'AA6577865'
            ],
            [
                'tab_number' => '2440',
                'fullname' => 'Миррахматов Пахлавон Набиевич',
                'passport' => 'AB5319570'
            ],
            [
                'tab_number' => '2441',
                'fullname' => 'Мадалиев Дониёр Туробжон угли',
                'passport' => 'AA3755050'
            ],
            [
                'tab_number' => '2442',
                'fullname' => 'Мазакиров Музаффар Гаппарович',
                'passport' => 'AB8534854'
            ],
            [
                'tab_number' => '2443',
                'fullname' => 'Мухторжонов Асилбек Муротали угли',
                'passport' => 'AA3873139'
            ],
            [
                'tab_number' => '2444',
                'fullname' => 'Мамаризаев Рахмон Равшанович',
                'passport' => 'AA5828554'
            ],
            [
                'tab_number' => '2448',
                'fullname' => 'Муминов Мухсинжон Муйдинжон угли',
                'passport' => 'AA9244826'
            ],
            [
                'tab_number' => '2453',
                'fullname' => 'Мелибоев Ахаджон Акрамжон угли',
                'passport' => 'AA8587582'
            ],
            [
                'tab_number' => '2454',
                'fullname' => 'Мирзовалиев Мавлон Махсуталиевич',
                'passport' => 'AB1818515'
            ],
            [
                'tab_number' => '2457',
                'fullname' => 'Меликузиев Бекзоджон Шеркузи угли',
                'passport' => 'AA5073929'
            ],
            [
                'tab_number' => '2458',
                'fullname' => 'Меликузиев Шерзоджон Шеркузи угли',
                'passport' => 'AA8838240'
            ],
            [
                'tab_number' => '2459',
                'fullname' => 'Назиров Сойибжон Содикович',
                'passport' => 'AB1100958'
            ],
            [
                'tab_number' => '2460',
                'fullname' => 'Мириноятов Миршохид Мирвохид угли',
                'passport' => 'AA6721692'
            ],
            [
                'tab_number' => '2461',
                'fullname' => 'Марупов Илхомжон Муроджон угли',
                'passport' => 'AB1369099'
            ],
            [
                'tab_number' => '2465',
                'fullname' => 'Муйдинов Исроилжон Исломжон угли',
                'passport' => 'AA8898318'
            ],
            [
                'tab_number' => '2466',
                'fullname' => 'Набиев Азаматжон Анваржон угли',
                'passport' => 'AA3279495'
            ],
            [
                'tab_number' => '2467',
                'fullname' => 'Соипов Кудратбек Хаётбек угли',
                'passport' => 'AB1121192'
            ],
            [
                'tab_number' => '2470',
                'fullname' => 'Махсуталиев Элбек Рустамжон угли',
                'passport' => 'AA3248272'
            ],
            [
                'tab_number' => '2472',
                'fullname' => 'Мансуров Дониёр Мирзали угли',
                'passport' => 'AA9719308'
            ],
            [
                'tab_number' => '2474',
                'fullname' => 'Мамаджанов Рашид Ташпулатович',
                'passport' => 'AB1136295'
            ],
            [
                'tab_number' => '2480',
                'fullname' => 'Хамраалиев Обиджон Мирзаалиевич',
                'passport' => 'AB7123129'
            ],
            [
                'tab_number' => '2481',
                'fullname' => 'Рузиев Аброржон Ахроржон угли',
                'passport' => 'AB4769307'
            ],
            [
                'tab_number' => '2483',
                'fullname' => 'Мухаммадалиев Умид Анваржонович',
                'passport' => 'AB0635682'
            ],
            [
                'tab_number' => '2484',
                'fullname' => 'Муминов Асаджон Музафарржон угли',
                'passport' => 'AA5925595'
            ],
            [
                'tab_number' => '2486',
                'fullname' => 'Солихужаев Нодирхон Норматхужа угли',
                'passport' => 'AA7644048'
            ],
            [
                'tab_number' => '2487',
                'fullname' => 'Мадрахимов Хусниддин Гайратович',
                'passport' => 'AA2852046'
            ],
            [
                'tab_number' => '2489',
                'fullname' => 'Ибрагимов Мухтор Мухамедович',
                'passport' => 'AB1300718'
            ],
            [
                'tab_number' => '2495',
                'fullname' => 'Толибжонов Элёржон Илхомжон угли',
                'passport' => 'AA3003125'
            ],
            [
                'tab_number' => '2502',
                'fullname' => 'Мамажонов Анваржон Адхамович',
                'passport' => 'AA8328299'
            ],
            [
                'tab_number' => '2503',
                'fullname' => 'Мадалиев Дмитрий Владимирович',
                'passport' => 'AA0988605'
            ],
            [
                'tab_number' => '2504',
                'fullname' => 'Мамарасулов Абдухалил Абдулхафизович',
                'passport' => 'AA4070548'
            ],
            [
                'tab_number' => '2505',
                'fullname' => 'Мадумаров Дилшод Шухратович',
                'passport' => 'AA8308173'
            ],
            [
                'tab_number' => '2507',
                'fullname' => 'Хатамов Холматжон Абдухолик угли',
                'passport' => 'AA7543369'
            ],
            [
                'tab_number' => '2508',
                'fullname' => 'Мухаммаджонов Аброржон Музаффаржон угли',
                'passport' => 'AA8992676'
            ],
            [
                'tab_number' => '2509',
                'fullname' => 'Мухсинов Азизхон Гуломжон угли',
                'passport' => 'AA3905127'
            ],
            [
                'tab_number' => '2510',
                'fullname' => 'Розиков Дониёржон Дуланбоевич',
                'passport' => 'AA0940276'
            ],
            [
                'tab_number' => '2512',
                'fullname' => 'Собиров Абдуллажон Саидахмад угли',
                'passport' => 'AA6761642'
            ],
            [
                'tab_number' => '2513',
                'fullname' => 'Алиев Жавохир Олимжон угли',
                'passport' => 'AA1186248'
            ],
            [
                'tab_number' => '2514',
                'fullname' => 'Маликов Лазизхон Одилбек угли',
                'passport' => 'AB8307296'
            ],
            [
                'tab_number' => '2517',
                'fullname' => 'Носиржонов Умиджон Аскаржон угли',
                'passport' => 'AB4027922'
            ],
            [
                'tab_number' => '2518',
                'fullname' => 'Набиев Мухриддин Мухиддинжон угли',
                'passport' => 'AB8169430'
            ],
            [
                'tab_number' => '2519',
                'fullname' => 'Набижонов Элёржон Вахиджон угли',
                'passport' => 'AB0062306'
            ],
            [
                'tab_number' => '2520',
                'fullname' => 'Эргашев Хамдамжон Яшаржон угли',
                'passport' => 'AA5411394'
            ],
            [
                'tab_number' => '2521',
                'fullname' => 'Назиров Абдулбосит Абдураззок угли',
                'passport' => 'AA3007518'
            ],
            [
                'tab_number' => '2523',
                'fullname' => 'Турдалиев Акмалжон Мадаминжон угли',
                'passport' => 'AB0053408'
            ],
            [
                'tab_number' => '2526',
                'fullname' => 'Нуъманов Илёсбек Икболмирзо угли',
                'passport' => 'AA2213064'
            ],
            [
                'tab_number' => '2528',
                'fullname' => 'Набиев Отабек Мухаммаджон угли',
                'passport' => 'AA6847281'
            ],
            [
                'tab_number' => '2529',
                'fullname' => 'Носиров Латифжон Рахимжон угли',
                'passport' => 'AB1167065'
            ],
            [
                'tab_number' => '2530',
                'fullname' => 'Набиев Неъматжон Расулович',
                'passport' => 'AA6774028'
            ],
            [
                'tab_number' => '2533',
                'fullname' => 'Набиев Миржахон Маърифжон угли',
                'passport' => 'AB1100104'
            ],
            [
                'tab_number' => '2536',
                'fullname' => 'Низомиддинов Абдуллажон Хусниддин угли',
                'passport' => 'AA3406538'
            ],
            [
                'tab_number' => '2546',
                'fullname' => 'Муйдинов Сайдулло Файзуллаевич',
                'passport' => 'AA6363156'
            ],
            [
                'tab_number' => '2547',
                'fullname' => 'Сайфутдинова Мавлуда Мамуровна',
                'passport' => 'AA3450614'
            ],
            [
                'tab_number' => '2550',
                'fullname' => 'Расулов Аброржон Ахмаджон угли',
                'passport' => 'AA9138729'
            ],
            [
                'tab_number' => '2555',
                'fullname' => 'Умаров Элёржон Рузматжон угли',
                'passport' => 'AA6077731'
            ],
            [
                'tab_number' => '2558',
                'fullname' => 'Махмудов Аббосбек Анваржон угли',
                'passport' => 'AB0213866'
            ],
            [
                'tab_number' => '2559',
                'fullname' => 'Олимхужаев Хайруллахон Алижон угли',
                'passport' => 'AA7400219'
            ],
            [
                'tab_number' => '2565',
                'fullname' => 'Одилов Сарваржон Гайратович',
                'passport' => 'AB3682065'
            ],
            [
                'tab_number' => '2566',
                'fullname' => 'Омонбоев Равшанбек Рафикжон угли',
                'passport' => 'AA6796633'
            ],
            [
                'tab_number' => '2569',
                'fullname' => 'Охунов Бобур Гопиржон угли',
                'passport' => 'AA0687666'
            ],
            [
                'tab_number' => '2570',
                'fullname' => 'Отажонов Лазизжон Хикматжонович',
                'passport' => 'AB6781692'
            ],
            [
                'tab_number' => '2571',
                'fullname' => 'Омонов Икромжон Ахаджон угли',
                'passport' => 'AA6490064'
            ],
            [
                'tab_number' => '2594',
                'fullname' => 'Пулатов Салимжон Анвар угли',
                'passport' => 'AB4478494'
            ],
            [
                'tab_number' => '2595',
                'fullname' => 'Полвонов Авазбек Фуркат Угли',
                'passport' => 'AA1691506'
            ],
            [
                'tab_number' => '2604',
                'fullname' => 'Олимов Жахонгир Тулкинжон угли',
                'passport' => 'AB6262145'
            ],
            [
                'tab_number' => '2605',
                'fullname' => 'Умаров Махмуд Валиевич',
                'passport' => 'AC0667182'
            ],
            [
                'tab_number' => '2606',
                'fullname' => 'Абдулазизов Абдужалил Хамдамжон угли',
                'passport' => 'AB4613931'
            ],
            [
                'tab_number' => '2610',
                'fullname' => 'Корабоев Лазизбек Авазжон угли',
                'passport' => 'AA9820136'
            ],
            [
                'tab_number' => '2611',
                'fullname' => 'Раджапов Мовлон Собирович',
                'passport' => 'AB0646846'
            ],
            [
                'tab_number' => '2614',
                'fullname' => 'Солиев Мухаммадшокир Рахмонберди угли',
                'passport' => 'AA1839340'
            ],
            [
                'tab_number' => '2616',
                'fullname' => 'Каримов Абдуалим Рахимович',
                'passport' => 'AB1347101'
            ],
            [
                'tab_number' => '2618',
                'fullname' => 'Тухтасинов Шухрат Анварович',
                'passport' => 'AA9893793'
            ],
            [
                'tab_number' => '2620',
                'fullname' => 'Мамажанова Муаззамхон Гайратжон кизи',
                'passport' => 'AB4040082'
            ],
            [
                'tab_number' => '2621',
                'fullname' => 'Гафуров Элдор Гуломжон угли',
                'passport' => 'AB1167057'
            ],
            [
                'tab_number' => '2622',
                'fullname' => 'Джураева Раънохон Абдурахмоновна',
                'passport' => 'AB1528126'
            ],
            [
                'tab_number' => '2623',
                'fullname' => 'Ахраров Аббос Махмудович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '2624',
                'fullname' => 'Дехконов Абдурасул Иброхимжон угли­',
                'passport' => 'AA0769469'
            ],
            [
                'tab_number' => '2627',
                'fullname' => 'Мухамадалиев Алимардан Анваржонович',
                'passport' => 'AB5248084'
            ],
            [
                'tab_number' => '2628',
                'fullname' => 'Раджапов Зарифжон Кенжаевич',
                'passport' => 'AB1363844'
            ],
            [
                'tab_number' => '2629',
                'fullname' => 'Рахимжонов Нуриддин Кахрамон угли',
                'passport' => 'AB0870066'
            ],
            [
                'tab_number' => '2634',
                'fullname' => 'Рахимбобаев Бахтиёр Бахромжонович',
                'passport' => 'AA3280191'
            ],
            [
                'tab_number' => '2635',
                'fullname' => 'Матфозилов Олимхон Рахмонжон угли',
                'passport' => 'AB0392956'
            ],
            [
                'tab_number' => '2639',
                'fullname' => 'Каюмов Абдулатиф Вохиджон угли',
                'passport' => 'AA7543428'
            ],
            [
                'tab_number' => '2644',
                'fullname' => 'Тургунбоева Олмос Хамиджон кизи',
                'passport' => 'AA4452807'
            ],
            [
                'tab_number' => '2671',
                'fullname' => 'Садиров Ахрорбек Анвар угли',
                'passport' => 'AA6011059'
            ],
            [
                'tab_number' => '2673',
                'fullname' => 'Сидиков Содир Мухамедович',
                'passport' => 'AB0685369'
            ],
            [
                'tab_number' => '2675',
                'fullname' => 'Саакян Макич Мишаевич',
                'passport' => 'AA9310142'
            ],
            [
                'tab_number' => '2677',
                'fullname' => 'Суюнбоев Анваржон Акмалжон угли',
                'passport' => 'AA7962821'
            ],
            [
                'tab_number' => '2684',
                'fullname' => 'Сулаймонов Кудратулло Хатамжонович',
                'passport' => 'AA9039681'
            ],
            [
                'tab_number' => '2685',
                'fullname' => 'Содиков Сохибжон Сойибжон угли',
                'passport' => 'AB0809601'
            ],
            [
                'tab_number' => '2690',
                'fullname' => 'Сайдазимов Саидбурхон Акбарович',
                'passport' => 'AB4278064'
            ],
            [
                'tab_number' => '2701',
                'fullname' => 'Ахраров Бахром Акрабович',
                'passport' => 'AB2600151'
            ],
            [
                'tab_number' => '2702',
                'fullname' => 'Расулов Рамз Алишерович',
                'passport' => 'AB1071652'
            ],
            [
                'tab_number' => '2703',
                'fullname' => 'Эркабоев Рустамжон Рузали угли',
                'passport' => 'AA9638650'
            ],
            [
                'tab_number' => '2704',
                'fullname' => 'Мирбаратов Джамал Хусанович',
                'passport' => 'AB6524180'
            ],
            [
                'tab_number' => '2708',
                'fullname' => 'Олимов Мансур Кодирович',
                'passport' => 'AB7821515'
            ],
            [
                'tab_number' => '2709',
                'fullname' => 'Абдувахобов Окилжон Абдувохид угли',
                'passport' => 'AA8993052'
            ],
            [
                'tab_number' => '2711',
                'fullname' => 'Умаров Умиджон Хислатжон угли',
                'passport' => 'AA2330343'
            ],
            [
                'tab_number' => '2713',
                'fullname' => 'Алиназарова Гулираъно Анваржон кизи',
                'passport' => 'AB6129034'
            ],
            [
                'tab_number' => '2714',
                'fullname' => 'Рахматиллаева Гуласалхон Анваржон кизи',
                'passport' => 'AB8538725'
            ],
            [
                'tab_number' => '2715',
                'fullname' => 'Икромов Акмал Абдумаликович',
                'passport' => 'AB5319418'
            ],
            [
                'tab_number' => '2718',
                'fullname' => 'Рахимкулов Мирза Бекмирзаевич',
                'passport' => 'AB5281683'
            ],
            [
                'tab_number' => '2719',
                'fullname' => 'Эсонов Хикматулло Бахтиёрович',
                'passport' => 'AA4273080'
            ],
            [
                'tab_number' => '2722',
                'fullname' => 'Туранов Фарход Захидович',
                'passport' => 'AA3615057'
            ],
            [
                'tab_number' => '2723',
                'fullname' => 'Хайдаров Зохиджон Зокиржон угли',
                'passport' => 'AA2528659'
            ],
            [
                'tab_number' => '2724',
                'fullname' => 'Турдиалиева Умида Турсуновна',
                'passport' => 'AB0107080'
            ],
            [
                'tab_number' => '2727',
                'fullname' => 'Салимов Мухсин Мадаминович',
                'passport' => 'AC0619968'
            ],
            [
                'tab_number' => '2729',
                'fullname' => 'Абдурахмонова Шохида Зарифовна',
                'passport' => 'AA7225151'
            ],
            [
                'tab_number' => '2730',
                'fullname' => 'Азамова Дилрабо Муратовна',
                'passport' => 'AA2212468'
            ],
            [
                'tab_number' => '2731',
                'fullname' => 'Эргашева Саодатхон Холматжон кизи',
                'passport' => 'AA3361335'
            ],
            [
                'tab_number' => '2732',
                'fullname' => 'Арипов Сайиб Саидович',
                'passport' => 'AA2465634'
            ],
            [
                'tab_number' => '2733',
                'fullname' => 'Урунбаева Халима Тургуновна',
                'passport' => 'AB5686126'
            ],
            [
                'tab_number' => '2737',
                'fullname' => 'Тожибоев Нурулло Тулкин угли',
                'passport' => 'AA3676216'
            ],
            [
                'tab_number' => '2739',
                'fullname' => 'Турсунов Жамшид Камолович',
                'passport' => 'AA2579143'
            ],
            [
                'tab_number' => '2740',
                'fullname' => 'Турсунов Суннатжон Шухратжон угли',
                'passport' => 'AA6841934'
            ],
            [
                'tab_number' => '2742',
                'fullname' => 'Валиев Аббосжон Фахриддинжон угли',
                'passport' => 'AA0446356'
            ],
            [
                'tab_number' => '2743',
                'fullname' => 'Тухтакулов Шавкатжон Алишер угли',
                'passport' => 'AB2598537'
            ],
            [
                'tab_number' => '2745',
                'fullname' => 'Туйчиев Икболжон Исломжон угли',
                'passport' => 'AA1985817'
            ],
            [
                'tab_number' => '2746',
                'fullname' => 'Тиллаев Шавкатжон Вахобович',
                'passport' => 'AA0865661'
            ],
            [
                'tab_number' => '2748',
                'fullname' => 'Тиллабоев Наврузбек Рахмиддин угли',
                'passport' => 'AA7274015'
            ],
            [
                'tab_number' => '2754',
                'fullname' => 'Таджибаев Акмалжон Шавкатович',
                'passport' => 'AA9988191'
            ],
            [
                'tab_number' => '2755',
                'fullname' => 'Исакова Арзигул Акиловна',
                'passport' => 'AB1136051'
            ],
            [
                'tab_number' => '2756',
                'fullname' => 'Исмаилова Юлдуз Акбаровна',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '2757',
                'fullname' => 'Каримова Шахло Юлдашали кизи',
                'passport' => 'AA7941297'
            ],
            [
                'tab_number' => '2758',
                'fullname' => 'Омонов Шохрух Нуъмонжон угли',
                'passport' => 'AA5341362'
            ],
            [
                'tab_number' => '2760',
                'fullname' => 'Тухтакулов Жалолдин Ибрагимович',
                'passport' => 'AA8299999'
            ],
            [
                'tab_number' => '2761',
                'fullname' => 'Турдиев Эгамназар Примназарович',
                'passport' => 'AB4159143'
            ],
            [
                'tab_number' => '2773',
                'fullname' => 'Усмоналиева Зулфияхон Муйдиновна',
                'passport' => 'AB0695523'
            ],
            [
                'tab_number' => '2774',
                'fullname' => 'Миланина Мария Анатолевна',
                'passport' => 'AA5537108'
            ],
            [
                'tab_number' => '2777',
                'fullname' => 'Алиева Сайёра Хамидовна',
                'passport' => 'AC0834466'
            ],
            [
                'tab_number' => '2780',
                'fullname' => 'Куконбоев Зафаржон Бахтиёржонович',
                'passport' => 'AA2272147'
            ],
            [
                'tab_number' => '2781',
                'fullname' => 'Назирова Дилдора Махаммаджановна',
                'passport' => 'AB7930363'
            ],
            [
                'tab_number' => '2782',
                'fullname' => 'Максудова Мафтунахон Абдуллахон кизи',
                'passport' => 'AA7941481'
            ],
            [
                'tab_number' => '2784',
                'fullname' => 'Абдурашидова Мукаддас Хусанжон кизи',
                'passport' => 'AA7470097'
            ],
            [
                'tab_number' => '2788',
                'fullname' => 'Аббосхонов Асрорхон Жабборхон угли',
                'passport' => 'AA5537118'
            ],
            [
                'tab_number' => '2790',
                'fullname' => 'Абдуллаева Муштарий Нарзулло кизи',
                'passport' => 'AB8877023'
            ],
            [
                'tab_number' => '2791',
                'fullname' => 'Садикова Дилнавоз Тургуновна',
                'passport' => 'AA0371677'
            ],
            [
                'tab_number' => '2791',
                'fullname' => 'Содикова Дилдорахон Аскарали кизи',
                'passport' => 'AB6902960'
            ],
            [
                'tab_number' => '2793',
                'fullname' => 'Уринов Олимжон Маъруфович',
                'passport' => 'AA5220759'
            ],
            [
                'tab_number' => '2795',
                'fullname' => 'Пулатов Отабек Кучкарович',
                'passport' => 'AA2005573'
            ],
            [
                'tab_number' => '2796',
                'fullname' => 'Усаркулов Сулаймонкул Асанкулович',
                'passport' => 'AB4224612'
            ],
            [
                'tab_number' => '2797',
                'fullname' => 'Игамбердиева Сугдиёна Гайратжон кизи',
                'passport' => 'AB7458675'
            ],
            [
                'tab_number' => '2798',
                'fullname' => 'Урунбоев Акмалхон Алижон угли',
                'passport' => 'AB1377112'
            ],
            [
                'tab_number' => '2799',
                'fullname' => 'Умаров Улугбек Иномович',
                'passport' => 'AA8142920'
            ],
            [
                'tab_number' => '2800',
                'fullname' => 'Усмонов Фаррухжон Фарходжон угли',
                'passport' => 'AA9685065'
            ],
            [
                'tab_number' => '2803',
                'fullname' => 'Умаров Отабек Иномжон угли',
                'passport' => 'AA8176565'
            ],
            [
                'tab_number' => '2807',
                'fullname' => 'Узаков Эркинжон Турдиалиевич',
                'passport' => 'AA6377430'
            ],
            [
                'tab_number' => '2809',
                'fullname' => 'Урунов Сардоржон Ибрахимжон угли',
                'passport' => 'AA3319957'
            ],
            [
                'tab_number' => '2810',
                'fullname' => 'Усмонов Достонжон Дилмуроджон угли',
                'passport' => 'AA1209206'
            ],
            [
                'tab_number' => '2813',
                'fullname' => 'Эшназаров Азизжон Турсуналиевич',
                'passport' => 'AA9093223'
            ],
            [
                'tab_number' => '2816',
                'fullname' => 'Эрматов Акмалжон  Саминжонович',
                'passport' => 'AC1176083'
            ],
            [
                'tab_number' => '2818',
                'fullname' => 'Абилов Саит Серверович',
                'passport' => 'AA8965461'
            ],
            [
                'tab_number' => '2822',
                'fullname' => 'Гуломов Толибжон Тохирович',
                'passport' => 'AB6842483'
            ],
            [
                'tab_number' => '2823',
                'fullname' => 'Жуманов Шерзоджон Маъмуржон угли',
                'passport' => 'AA8612162'
            ],
            [
                'tab_number' => '2825',
                'fullname' => 'Маматкулов Шерзод Саминович',
                'passport' => 'AB0052497'
            ],
            [
                'tab_number' => '2827',
                'fullname' => 'Ортиков Хусанбой Имомназарович',
                'passport' => 'AA8613890'
            ],
            [
                'tab_number' => '2832',
                'fullname' => 'Набиджонов Сирожиддин Комилович',
                'passport' => 'AA1651368'
            ],
            [
                'tab_number' => '2834',
                'fullname' => 'Мамараджапов Фазил Мадрахимович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '2836',
                'fullname' => 'Таджибоев Рахмон Одилович',
                'passport' => 'AB0816524'
            ],
            [
                'tab_number' => '2837',
                'fullname' => 'Парпиев Тулкинжон Ахмедович',
                'passport' => 'AA0391397'
            ],
            [
                'tab_number' => '2838',
                'fullname' => 'Фарходов Жасур Илхомжон угли',
                'passport' => 'AA8975733'
            ],
            [
                'tab_number' => '2840',
                'fullname' => 'Назаров Мухаммаджон Кимсанович',
                'passport' => 'AB1218010'
            ],
            [
                'tab_number' => '2844',
                'fullname' => 'Баратов Исмаил Тургунович',
                'passport' => 'AB1598033'
            ],
            [
                'tab_number' => '2846',
                'fullname' => 'Хусанов Жавохир Тахирович',
                'passport' => 'AB6726710'
            ],
            [
                'tab_number' => '2847',
                'fullname' => 'Кодиров Абдухамид Абдухалимович',
                'passport' => 'AC0671412'
            ],
            [
                'tab_number' => '2848',
                'fullname' => 'Пулатов Музаффаржон Тахирович',
                'passport' => 'AC1536609'
            ],
            [
                'tab_number' => '2849',
                'fullname' => 'Холматов Мухаммадюсуф Рузматжон угли',
                'passport' => 'AA3167631'
            ],
            [
                'tab_number' => '2852',
                'fullname' => 'Хамдамов Афрузбек Асаджон угли',
                'passport' => 'AA5128156'
            ],
            [
                'tab_number' => '2860',
                'fullname' => 'Хакимов Бурхон Бахадирович',
                'passport' => 'AB0746063'
            ],
            [
                'tab_number' => '2861',
                'fullname' => 'Хайдаров Шахобиддин Олимхон угли',
                'passport' => 'AA5468567'
            ],
            [
                'tab_number' => '2875',
                'fullname' => 'Хусанбоев Абдупаттох Артикбоевич',
                'passport' => 'AA5925941'
            ],
            [
                'tab_number' => '2881',
                'fullname' => 'Хошимов Ахаджон Ахмаджон угли',
                'passport' => 'AB5956475'
            ],
            [
                'tab_number' => '2882',
                'fullname' => 'Холматов Олимжон Азадович',
                'passport' => 'AA5354311'
            ],
            [
                'tab_number' => '2885',
                'fullname' => 'Хонимкулов Жавлонбек Сохибжонович',
                'passport' => 'AB5800173'
            ],
            [
                'tab_number' => '2887',
                'fullname' => 'Хакимбаев Икром Исраилович',
                'passport' => 'AB1416901'
            ],
            [
                'tab_number' => '2888',
                'fullname' => 'Хамдамов Зиёджон Гайратжон угли',
                'passport' => 'AA6868335'
            ],
            [
                'tab_number' => '2905',
                'fullname' => 'Мадазимов Азим Султанович',
                'passport' => 'AB0107190'
            ],
            [
                'tab_number' => '2906',
                'fullname' => 'Батиров Боходиржон Марип угли',
                'passport' => 'AA6180872'
            ],
            [
                'tab_number' => '2907',
                'fullname' => 'Кенжабаев Абдуллажон Арабджанович',
                'passport' => 'AA3843825'
            ],
            [
                'tab_number' => '2909',
                'fullname' => 'Маллабоев Хатамжон Уринбаевич',
                'passport' => 'AA8833299'
            ],
            [
                'tab_number' => '2911',
                'fullname' => 'Ахмадалиев Ахрор Норматович',
                'passport' => 'AB6633320'
            ],
            [
                'tab_number' => '2914',
                'fullname' => 'Мамаюсупов Ахмаджон Мухаммаджонович',
                'passport' => 'AA2342292'
            ],
            [
                'tab_number' => '2915',
                'fullname' => 'Адилов Рузматжон Умарович',
                'passport' => 'AB1300746'
            ],
            [
                'tab_number' => '2916',
                'fullname' => 'Карабаев Икболжон Рахматуллаевич',
                'passport' => 'AA7868233'
            ],
            [
                'tab_number' => '2920',
                'fullname' => 'Кучкаров Фахриёр Гайратжон угли',
                'passport' => 'AB1387769'
            ],
            [
                'tab_number' => '2922',
                'fullname' => 'Холматов Одилжон Мелибаевич',
                'passport' => 'AA1735675'
            ],
            [
                'tab_number' => '2925',
                'fullname' => 'Абдужабборов Абдусалим Ганижон угли',
                'passport' => 'AB1035680'
            ],
            [
                'tab_number' => '2927',
                'fullname' => 'Холматов Сайдулло Лутфиллаевич',
                'passport' => 'AA8210075'
            ],
            [
                'tab_number' => '2930',
                'fullname' => 'Тургунов Темурмалик Муроджон угли',
                'passport' => 'AB0464432'
            ],
            [
                'tab_number' => '2935',
                'fullname' => 'Бокиев Убайдулло Абдурахмон угли',
                'passport' => 'AA9896276'
            ],
            [
                'tab_number' => '2936',
                'fullname' => 'Ганиев Мухиддин Марибджанович',
                'passport' => 'AA1569028'
            ],
            [
                'tab_number' => '2938',
                'fullname' => 'Умаралиев Рахимжон Шохобиддин угли',
                'passport' => 'AB3691667'
            ],
            [
                'tab_number' => '2943',
                'fullname' => 'Солижонов Сохибжон Содикжон угли',
                'passport' => 'AA7925619'
            ],
            [
                'tab_number' => '2944',
                'fullname' => 'Мухаммадиев Мухсин Ахмедович',
                'passport' => 'AB4475838'
            ],
            [
                'tab_number' => '2945',
                'fullname' => 'Юнусов Давлатжон Абдурахим угли',
                'passport' => 'AB0895677'
            ],
            [
                'tab_number' => '2946',
                'fullname' => 'Мирзажонов Хотамжон Нематжонович',
                'passport' => 'AA1145791'
            ],
            [
                'tab_number' => '2947',
                'fullname' => 'Мансуров Мухаммадумар Махмуд угли',
                'passport' => 'AA2456651'
            ],
            [
                'tab_number' => '2949',
                'fullname' => 'Маматов Элёрбек Ахатжон угли',
                'passport' => 'AA6572770'
            ],
            [
                'tab_number' => '2959',
                'fullname' => 'Абдуллаев Араббой Махамаджон угли',
                'passport' => 'AB7128346'
            ],
            [
                'tab_number' => '2960',
                'fullname' => 'Шеркузиев Сохибжон Абдусамад угли',
                'passport' => 'AB7333473'
            ],
            [
                'tab_number' => '2961',
                'fullname' => 'Шакиров Шухрат Садирович',
                'passport' => 'AA6008822'
            ],
            [
                'tab_number' => '2969',
                'fullname' => 'Орипов Мухаммаджон Турсунали угли',
                'passport' => 'AA8122846'
            ],
            [
                'tab_number' => '2970',
                'fullname' => 'Дадабоев Комилжон Камолжон угли',
                'passport' => 'AA7492606'
            ],
            [
                'tab_number' => '2972',
                'fullname' => 'Отажонов Одилжон Кодирали угли',
                'passport' => 'AA2336369'
            ],
            [
                'tab_number' => '2977',
                'fullname' => 'Исаков Зухриддинжон Махаматжон угли',
                'passport' => 'AB4275528'
            ],
            [
                'tab_number' => '2978',
                'fullname' => 'Азимов Алиджан Садикович',
                'passport' => 'AB1397792'
            ],
            [
                'tab_number' => '2980',
                'fullname' => 'Кодиров Жасурбек Арабжон угли',
                'passport' => 'AA9605665'
            ],
            [
                'tab_number' => '2982',
                'fullname' => 'Буронбоев Хожиакбар Маъмуржон угли',
                'passport' => 'AA7210430'
            ],
            [
                'tab_number' => '2985',
                'fullname' => 'Казанцев Дмитрий Васильевич',
                'passport' => 'AA8310118'
            ],
            [
                'tab_number' => '2990',
                'fullname' => 'Турдибаев Бахтиёржон Нурмухаммадович',
                'passport' => 'AA6911733'
            ],
            [
                'tab_number' => '2995',
                'fullname' => 'Сатвалдиев Бехруз Мукумиевич',
                'passport' => 'AA2339970'
            ],
            [
                'tab_number' => '2998',
                'fullname' => 'Мирзаев Адхам Огзамжонович',
                'passport' => 'AB0894057'
            ],
            [
                'tab_number' => '2999',
                'fullname' => 'Хакимов Мусожон Хошимович',
                'passport' => 'AA6574725'
            ],
            [
                'tab_number' => '3000',
                'fullname' => 'Муминов Анвар Мухаммадиевич',
                'passport' => 'AB1136260'
            ],
            [
                'tab_number' => '3001',
                'fullname' => 'Мамажонов Ахмаджон Хакимович',
                'passport' => 'AB3061482'
            ],
            [
                'tab_number' => '3004',
                'fullname' => 'Ирматов Али Ниматович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '3006',
                'fullname' => 'Абдурахмонова Фазилатхон Гафуровна',
                'passport' => 'AB0866022'
            ],
            [
                'tab_number' => '3008',
                'fullname' => 'Ахмедов Наримон Шухрат угли',
                'passport' => 'AB0141881'
            ],
            [
                'tab_number' => '3010',
                'fullname' => 'Азимов Жахонгир Бахтиёржон угли',
                'passport' => 'AA5341127'
            ],
            [
                'tab_number' => '3012',
                'fullname' => 'Таджибаев Элдоржон Рахмон угли',
                'passport' => 'AB1306542'
            ],
            [
                'tab_number' => '3013',
                'fullname' => 'Мамаджанова Жамила Турсуновна',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '3014',
                'fullname' => 'Эхсоналиев Хаётилло Шерали угли',
                'passport' => 'AA8439024'
            ],
            [
                'tab_number' => '3016',
                'fullname' => 'Эрматов Зокир Усманович',
                'passport' => 'AA7848670'
            ],
            [
                'tab_number' => '3017',
                'fullname' => 'Эшонкулов Мухаммадхон Махмудхон угли',
                'passport' => 'AA5278702'
            ],
            [
                'tab_number' => '3018',
                'fullname' => 'Эргашев Исломжон Исакжон угли',
                'passport' => 'AA6504468'
            ],
            [
                'tab_number' => '3019',
                'fullname' => 'Эрматов Ойбек Шухратжон угли',
                'passport' => 'AA9401608'
            ],
            [
                'tab_number' => '3020',
                'fullname' => 'Дехконов Равшанжон Азизжон угли',
                'passport' => 'AA8512857'
            ],
            [
                'tab_number' => '3021',
                'fullname' => 'Эралиев Сафарали Илхомжон угли',
                'passport' => 'AA9967078'
            ],
            [
                'tab_number' => '3022',
                'fullname' => 'Адажбаев Азиз Джуманович',
                'passport' => 'AB0699614'
            ],
            [
                'tab_number' => '3023',
                'fullname' => 'Камилов Шукур Рахманович',
                'passport' => 'AB8568241'
            ],
            [
                'tab_number' => '3024',
                'fullname' => 'Рахматиллаев Холик Исматуллаевич',
                'passport' => 'AB5917048'
            ],
            [
                'tab_number' => '3026',
                'fullname' => 'Абдурахмонов Хасанжон Тухтасинович',
                'passport' => 'AB5545063'
            ],
            [
                'tab_number' => '3028',
                'fullname' => 'Иргашев Эркин Чинасович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '3029',
                'fullname' => 'Джурабаева Зулфия Хабибуллаевна',
                'passport' => 'AB1297712'
            ],
            [
                'tab_number' => '3030',
                'fullname' => 'Астанакулов Баходир Тургунович',
                'passport' => 'AA4752384'
            ],
            [
                'tab_number' => '3031',
                'fullname' => 'Абдукодиров Миржолол Шавкатжонович',
                'passport' => 'AA2176391'
            ],
            [
                'tab_number' => '3033',
                'fullname' => 'Лисенко Владимир Александрович',
                'passport' => 'AA9129068'
            ],
            [
                'tab_number' => '3034',
                'fullname' => 'Косимов Ахаджон Акрамжон угли',
                'passport' => 'AA2054544'
            ],
            [
                'tab_number' => '3035',
                'fullname' => 'Ахмедов Низомжон Шухрат угли',
                'passport' => 'AB4105195'
            ],
            [
                'tab_number' => '3036',
                'fullname' => 'Комилов Равшанжон Юлдашевич',
                'passport' => 'AA9050343'
            ],
            [
                'tab_number' => '3037',
                'fullname' => 'Ахмедов Шакиржон Исанович',
                'passport' => 'AA6600063'
            ],
            [
                'tab_number' => '3039',
                'fullname' => 'Якубов Ахрар Ахмедович',
                'passport' => 'AB1136458'
            ],
            [
                'tab_number' => '3041',
                'fullname' => 'Сотволдиев Жахонгир Шавкатович',
                'passport' => 'AB0513934'
            ],
            [
                'tab_number' => '3042',
                'fullname' => 'Туйчиев Журакузи Меликузиевич',
                'passport' => 'AB7027153'
            ],
            [
                'tab_number' => '3043',
                'fullname' => 'Таджиев Мухторжон Ибрагимович',
                'passport' => 'AB3731422'
            ],
            [
                'tab_number' => '3044',
                'fullname' => 'Юлдашев Исломбек Бахтиёржон угли',
                'passport' => 'AA7042188'
            ],
            [
                'tab_number' => '3045',
                'fullname' => 'Юсупов Сирожиддин Тургунжон угли',
                'passport' => 'AA6579777'
            ],
            [
                'tab_number' => '3046',
                'fullname' => 'Мелибоев Икболжон Эргашевич',
                'passport' => 'AA1621105'
            ],
            [
                'tab_number' => '3047',
                'fullname' => 'Юлдашев Маликжон Мамиржон угли',
                'passport' => 'AA6969762'
            ],
            [
                'tab_number' => '3048',
                'fullname' => 'Юлчиев Ёркинжон Ёдгорбоевич',
                'passport' => 'AA4766640'
            ],
            [
                'tab_number' => '3049',
                'fullname' => 'Юсупов Бунёджон Толибович',
                'passport' => 'AA6745833'
            ],
            [
                'tab_number' => '3050',
                'fullname' => 'Юлдашев Музаффар Максудалиевич',
                'passport' => 'AA1045262'
            ],
            [
                'tab_number' => '3051',
                'fullname' => 'Таджиев Мавлан Ибрагимович',
                'passport' => 'AC0838786'
            ],
            [
                'tab_number' => '3052',
                'fullname' => 'Губаев Решат Равилевич',
                'passport' => 'AB1198070'
            ],
            [
                'tab_number' => '3053',
                'fullname' => 'Юсупов Шохислом Солижон угли',
                'passport' => 'AB1506341'
            ],
            [
                'tab_number' => '3055',
                'fullname' => 'Салимов Махмуд Маъмурович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '3057',
                'fullname' => 'Йулдашев Хаётжон Турсунали угли',
                'passport' => 'AA4364038'
            ],
            [
                'tab_number' => '3059',
                'fullname' => 'Ташпулатов Рустам Хаятович',
                'passport' => 'AB5210885'
            ],
            [
                'tab_number' => '3061',
                'fullname' => 'Алижонов Баходиржон Дилшоджон угли',
                'passport' => 'AA3244191'
            ],
            [
                'tab_number' => '3063',
                'fullname' => 'Алиев Хамиджон Хаётжон угли',
                'passport' => 'AA7516369'
            ],
            [
                'tab_number' => '3065',
                'fullname' => 'Хайруллаев Алижон Шерхонович',
                'passport' => 'AB7674675'
            ],
            [
                'tab_number' => '3068',
                'fullname' => 'Умурзаков Абдурашид Тухтасинович',
                'passport' => 'AB1140876'
            ],
            [
                'tab_number' => '3069',
                'fullname' => 'Шеркузиев Мехмонали Норкузиевич',
                'passport' => 'AC0835014'
            ],
            [
                'tab_number' => '3070',
                'fullname' => 'Тиллабоев Абдуманнон Мухиддин угли',
                'passport' => 'AA3406537'
            ],
            [
                'tab_number' => '3071',
                'fullname' => 'Адажбаев Лазиз Азизович',
                'passport' => 'AA2284820'
            ],
            [
                'tab_number' => '3072',
                'fullname' => 'Ярматов Ахад Мухамадалиевич',
                'passport' => 'AA6013376'
            ],
            [
                'tab_number' => '3073',
                'fullname' => 'Бозоров Зафар Эргашевич',
                'passport' => 'AB1219071'
            ],
            [
                'tab_number' => '3074',
                'fullname' => 'Якубов Зохиджон Алиевич',
                'passport' => 'AA1426851'
            ],
            [
                'tab_number' => '3075',
                'fullname' => 'Каримов Рустам Камилович',
                'passport' => 'AB0695435'
            ],
            [
                'tab_number' => '3078',
                'fullname' => 'Астанакулов Кодиржон Мехмонович',
                'passport' => 'AB1491696'
            ],
            [
                'tab_number' => '3079',
                'fullname' => 'Кузиев Шохижахон Эргашбой угли',
                'passport' => 'AB8644609'
            ],
            [
                'tab_number' => '3080',
                'fullname' => 'Рахмонов Равшанжон Рузматович',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '3081',
                'fullname' => 'Сойибназаров Шохаббос Наримон угли',
                'passport' => 'AA8128899'
            ],
            [
                'tab_number' => '3084',
                'fullname' => 'Ходжаев Ахмадхон Исламович',
                'passport' => 'AA9656724'
            ],
            [
                'tab_number' => '3085',
                'fullname' => 'Юлдашев Ёркинжон Валиевич',
                'passport' => 'AB2446651'
            ],
            [
                'tab_number' => '3086',
                'fullname' => 'Исаков Мирзохиджон Мадаминович',
                'passport' => 'AB1069479'
            ],
            [
                'tab_number' => '3089',
                'fullname' => 'Раджапов Уткиржон  Кенжаевич',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '3094',
                'fullname' => 'Ахмедов Исломжон Бурхонжон угли',
                'passport' => 'AA0591349'
            ],
            [
                'tab_number' => '3097',
                'fullname' => 'Жураев Сардорбек Уринбой угли',
                'passport' => '123456789'
            ],
            [
                'tab_number' => '3099',
                'fullname' => 'Муйдинов Шохрухбек Хусанбой угли',
                'passport' => 'AB2124258'
            ],
            [
                'tab_number' => '3100',
                'fullname' => 'Аскаров Бекмуроджон Хасан угли',
                'passport' => 'AA7830685'
            ],
            [
                'tab_number' => '3101',
                'fullname' => 'Баратов Улмас Рахматуллаевич',
                'passport' => 'AB4907481'
            ],
            [
                'tab_number' => '3102',
                'fullname' => 'Шомуротов Абдукодир Пулатович',
                'passport' => 'AB3088557'
            ],
            [
                'tab_number' => '3108',
                'fullname' => 'Одилжанов Сирож Солижон угли',
                'passport' => 'AA5017607'
            ],
            [
                'tab_number' => '3110',
                'fullname' => 'Умуркулов Ахаджон Адхамжон угли',
                'passport' => 'AA7974960'
            ],
            [
                'tab_number' => '3111',
                'fullname' => 'Турсунов Азизхон Мухторович',
                'passport' => 'AC0839558'
            ],
            [
                'tab_number' => '3112',
                'fullname' => 'Ходиев Бахтиёрхужа Тохирович',
                'passport' => 'AA0635430'
            ],
            [
                'tab_number' => '3113',
                'fullname' => 'Мухаммаджонов Асроржон Анваржон угли',
                'passport' => 'AB3093683'
            ],
            [
                'tab_number' => '3115',
                'fullname' => 'Зокиров Зайнобиддин Гофуржон угли',
                'passport' => 'AB5306009'
            ],
            [
                'tab_number' => '3116',
                'fullname' => 'Кодиров Абдумалик Абдукаххор угли',
                'passport' => 'AA3609192'
            ],
            [
                'tab_number' => '3118',
                'fullname' => 'Турсунов Сардорбек Сирожиддин угли',
                'passport' => 'AB3906759'
            ],
            [
                'tab_number' => '3119',
                'fullname' => 'Абдурахимов Умаржон Рафикжон угли1',
                'passport' => 'AB3326324'
            ],
            [
                'tab_number' => '3121',
                'fullname' => 'Рахмонов Илёсжон Абдурашид угли',
                'passport' => 'AA7470389'
            ],
            [
                'tab_number' => '3124',
                'fullname' => 'Алиев Элмуроджон Юсуфжон угли',
                'passport' => 'AA2475324'
            ],
            [
                'tab_number' => '3125',
                'fullname' => 'Толипов Аббосжон Орифжон угли',
                'passport' => 'AA7041750'
            ],
            [
                'tab_number' => '3126',
                'fullname' => 'Халилов Мухсинбек Комилжон угли',
                'passport' => 'AA7321066'
            ],
            [
                'tab_number' => '3128',
                'fullname' => 'Кимсанов Аброржон Абдушукур угли',
                'passport' => 'AA8016539'
            ],
            [
                'tab_number' => '3129',
                'fullname' => 'Жураев Ижодбек Хусанбой угли',
                'passport' => 'AB4541809'
            ],
            [
                'tab_number' => '3131',
                'fullname' => 'Ахмедов Бехзоджон Кодирали угли',
                'passport' => 'AA8129000'
            ],
            [
                'tab_number' => '3132',
                'fullname' => 'Мухаммаджанов Адхамжон Алижон угли',
                'passport' => 'AB4468581'
            ],
            [
                'tab_number' => '3133',
                'fullname' => 'Хакназаров Аскар Абдурахимович',
                'passport' => 'AA6567215'
            ],
            [
                'tab_number' => '3134',
                'fullname' => 'Рахмоналиев Мухриддин Мухаммаджон угли',
                'passport' => 'AA3989398'
            ],
            [
                'tab_number' => '3138',
                'fullname' => 'Халилов Асрор Бахромович',
                'passport' => 'AA0211963'
            ],
            [
                'tab_number' => '3139',
                'fullname' => 'Иномжонов Исломжон Илхомжон угли',
                'passport' => 'AB0971361'
            ],
            [
                'tab_number' => '3140',
                'fullname' => 'Иброхимов Бахромжон Бахтиёржон угли',
                'passport' => 'AB3670801'
            ],
            [
                'tab_number' => '3142',
                'fullname' => 'Каримов Максаджон Маъмуржон угли',
                'passport' => 'AB7055307'
            ],
            [
                'tab_number' => '3143',
                'fullname' => 'Абдурахмонов Азизжон Абдушукур угли',
                'passport' => 'AB1229600'
            ],
            [
                'tab_number' => '3145',
                'fullname' => 'Акбаралиев Ферузбек Абдувахоб угли',
                'passport' => 'AA0787006'
            ],
            [
                'tab_number' => '3146',
                'fullname' => 'Хайдаров Элёржон Эркинович',
                'passport' => 'AA4361710'
            ],
            [
                'tab_number' => '3147',
                'fullname' => 'Абдумаликов Кобилжон Толибжон уғли',
                'passport' => 'AB2017602'
            ],
            [
                'tab_number' => '3148',
                'fullname' => 'Курбанов Бустан Эсанович',
                'passport' => 'AB6772003'
            ],
            [
                'tab_number' => '3151',
                'fullname' => 'Аминов Азаматжон Уринович',
                'passport' => 'AC0839477'
            ],
            [
                'tab_number' => '3161',
                'fullname' => 'Кенжаев Боратбой Тухташбаевич',
                'passport' => 'AA8287152'
            ],
            [
                'tab_number' => '3165',
                'fullname' => 'Мелиев Баходиржон Муродович',
                'passport' => 'AB1056760'
            ],
            [
                'tab_number' => '3169',
                'fullname' => 'Норматов Жахонгир Зокиржон угли',
                'passport' => 'AA9301901'
            ],
            [
                'tab_number' => '3175',
                'fullname' => 'Хасанов Хусанжон Камбарович',
                'passport' => 'AA3285941'
            ],
            [
                'tab_number' => '3179',
                'fullname' => 'Аракулова Халида Тургуновна',
                'passport' => 'AC1729772'
            ],
            [
                'tab_number' => '3185',
                'fullname' => 'Мадаминов Лазизхон Авазхон угли',
                'passport' => 'AA9519741'
            ],
            [
                'tab_number' => '3219',
                'fullname' => 'Акрамов Баходир Джахонгирович',
                'passport' => 'AA7816645'
            ],
            [
                'tab_number' => '3306',
                'fullname' => 'Жураев Илхомжон Изатиллаевич',
                'passport' => 'AA0469564'
            ],
            [
                'tab_number' => '3313',
                'fullname' => 'Меликузиев Сардор Сирожиддин угли',
                'passport' => 'AA0499720'
            ],
            [
                'tab_number' => '3334',
                'fullname' => 'Пулатов Сардорбек Сидикович',
                'passport' => 'AA2712124'
            ],
            [
                'tab_number' => '3495',
                'fullname' => 'Марасулов Азизбек Тулкинович',
                'passport' => 'AA4790314'
            ],
            [
                'tab_number' => '3508',
                'fullname' => 'Турдалиев Элёржон Йигиталиевич',
                'passport' => 'AB7974865'
            ],
            [
                'tab_number' => '3726',
                'fullname' => 'Рахмонова Дилором Илхомжоновна',
                'passport' => 'AA0351231'
            ],
        ];

        Worker::insert($data);
    }
}
