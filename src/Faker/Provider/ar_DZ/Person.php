<?php

namespace Faker\Provider\ar_DZ;

use Faker\Calculator\Luhn;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}}',
        '{{lastName}} {{firstNameMale}} {{firstNameMale}}',
        '{{titleMale}} {{lastName}} {{firstNameMale}}',
    );

    protected static $femaleNameFormats = array(
        '{{lastName}} {{firstNameFemale}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{lastName}} {{firstNameFemale}} {{firstNameFemale}}',
        '{{titleFemale}} {{lastName}} {{firstNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    /**
     * @example توفيق
     */
    protected static $firstNameMale = array(
        'محمد', 'يوسف', 'أبوبكر', 'بوعمامة', 'سعيد', 'ادريس', 'ارسلان', 'سليمان',
        'آدم', 'أبراهيم', 'أحمد', 'أدهم', 'أسامة', 'أسعد', 'أشرف', 'أكرم', 'أمجد', 'أمين', 'أنس', 'أنور', 'أيمن', 'أيهم', 'أيوب', 'إبراهيم', 'إسلام', 'إسماعيل', 'إلياس', 'إياد', 'إيهاب', 'ابراهيم', 'احسان', 'احمد', 'ادريس', 'ادم', 'ادهم', 'اديب', 'اسامة',
        'اسحاق', 'اسحق', 'اسعد', 'اسلام', 'اسماعيل', 'اشرف', 'اصلان', 'اكثم', 'اكرم', 'البراء', 'البشر', 'الحارث', 'الحسين', 'ليث', 'منصور', 'الياس', 'اليمان', 'امجد', 'امير', 'امين', 'أنس', 'انور', 'انيس', 'اياد',
        'ايمن', 'ايهم', 'ايوب', 'باسم', 'بدر الدين', 'برهان', 'بسام', 'بشار', 'بشير', 'بلال', 'بهاء', 'تركي', 'توفيق', 'ثامر', 'جابر', 'جعفر', 'جلال', 'جمال', 'جهاد',
        'حاتم', 'حارث', 'حبيب', 'حذيفة', 'حسام', 'حسان', 'حسن', 'حسني', 'حسين', 'حكيم', 'احمد', 'حمزة', 'حميد', 'خالد', 'لخضر', 'خلدون', 'خليفة', 'خليل', 'داود', 'رؤوف',
        'ارزقي', 'الجمعي', 'بوزيد', 'بلقاسم', 'العبيدي', 'الغويني', 'البخاري', 'الربيع', 'السائح', 'أمير',
        'الهاشمي', 'ايدير', 'ماسينيسا', 'العيد', 'الزبير', 'نعيم', 'السعدي', 'السبتي', 'رشيد', 'محفوظ', 'شريف',
        'بوجمعة', 'بوزيان', 'بوعزة', 'أبو الأنوار', 'بغدادي', 'رياض', 'بوعلام', 'بغداد', 'بكير', 'بن عودة',
        'بلخير', 'باديس', 'مسعود', 'تواتي', 'توهامي', 'توفيق', 'تقي الدين', 'جلول', 'حرز الله',
        'حفناوي', 'سبخاوي', 'خوجة', 'خلف الله', 'حيدر', 'حليم', 'حجاج', 'خيضر',
        'خير الدين', 'دراجي', 'دحمان', 'رزقي', 'رضا', 'رابح', 'بولرباح', 'رفيق', 'رمزي', 'رمضان',
        'شعبان', 'رستم', 'رحيم', ' عبد الرحيم', 'عبد الله', ' عبدو', 'زاوي', 'زكريا', 'زكرياء', 'زهير',
        'لزهاري', 'زين العابدين', 'زيدان', 'زواوي', 'زياد', 'زيان', 'عاشور', 'زاكي', 'سالم',
        'سليم', 'سعدون', 'سلطان', 'سمير', 'سيف الدين', 'سنوسي', 'سعود', 'سحنون', 'سامي', 'سعد',
        'ساسي', 'شكيب', 'شهاب', 'شمس الدين', 'شعيب', 'شفيق', 'شكري', 'صلاح', 'صلاح الدين', 'صهيب',
        'صديق', 'ياسين', 'صدام', 'صالح', 'صادق', 'صابر', 'ضيف الله', 'طارق', 'الطيب', 'طيب', 'طاهر',
        'طلال', 'طه', 'عبد الباسط', 'عبد الباقي', 'عبد السلام', 'عبد الرزاق', 'عبد الحق', 'عبد العزيز',
        'عبد الهادي', 'عماد', 'عماد الدين', 'عميروش', 'مراد', 'العربي', 'عيسى', 'عطاء الله', 'عمارة',
        'عمر', 'عامر', 'عمران', 'عمار', 'عثمان', 'عدنان', 'علاء', 'علاء الدين', 'علال', 'علي', 'عصام', 'عز الدين',
        'غانم', 'غسان', 'فضيل', 'فريد', 'فتح الله', 'فتحي', 'فاروق', 'فارس', 'قادة', 'قدور', 'قاسم', 'كريم',
        'كمال', 'كسيلة', 'لطفي', 'لقمان', 'مالك', 'عبد  المالك', 'محي الدين', 'محمود', 'معمر',
        'مبروك', 'مخلوف', 'مدني', 'مختار', 'نجيب', 'مهدي', 'مروان', 'نوار', 'نور الدين', 'نوح', 'ناجي',
        'نوري', 'مناد', 'موسى', 'مرزوق', 'مولود', 'ميلود', 'العطري', 'موفق', 'مزيان', 'مصطفى', 'هارون',
        'هواري', 'هشام', 'هاشم', 'وسيم', 'وليد', 'وحيد', 'يزيد', 'يعقوب', 'يوغرطة', 'يونس', 'يسعد',
    );

    /**
     * @example إلهام
     */
    protected static $firstNameFemale = array(
        'خديجة', 'سعيدة', 'آلاء', 'آية', 'أبرار', 'أحلام', 'أروى', 'أريج', 'أسماء', 'أسيل', 'أصاله', 'أفنان', 'ألاء', 'أماني', 'أمل', 'أمال', 'أميرة', 'أنوار',
        'إسراء', 'إكرام', 'إنعام', 'إيمان', 'إيناس', 'ابتهال', 'أبرار', 'إخلاص', 'أروى', 'أريج',
        'اسراء', 'اسيل', 'اشراق', 'أصالة', 'إكرام', 'آلاء', 'إلهام', 'آمال', 'أمنة', 'أميرة', 'أمينة', 'أنعام', 'أنوار', 'آيات', 'إيمان', 'إيناس', 'آية', 'بسمة', 'بتول', 'بثينة', 'بسمة',
        'بشرى', 'تسنيم', 'تهاني', 'تولين', 'ثريا', 'جمانة', 'جميلة', 'جنى', 'جهاد', 'جود', 'حبيبة', 'حسينة', 'حليمة', 'حنان', 'حنين', 'حياة',
        'خديجة', 'خلود', 'خولة', 'دارين', 'داليا', 'دالية', 'دانية', 'دعاء', 'دلال', 'دنيا', 'ديانا', 'ديمة', 'دينا', 'رؤى', 'راغدة', 'رانيا', 'رجاء', 'رحمة', 'رزان',
        'رشا', 'رغد', 'رغدة', 'رقية', 'رندة', 'رنيم', 'ريهام', 'رهف', 'روان', 'رزان', 'رويدة', 'ريم', 'ريما', 'ريمة', 'ريناد', 'ريهام', 'زكية', 'زمان', 'زهرة', 'زين', 'زينا',
        'زينب', 'زينة', 'ساجدة', 'سارة', 'سجى', 'سحر', 'نسرين', 'سيرين', 'سعاد', 'سكينة', 'سليمة', 'سلسبيل', 'سلمى', 'سلوى', 'سما', 'سماح', 'سمر', 'سمية', 'سميرة', 'سناء', 'سندس', 'سهام', 'سهى', 'سهيلة', 'سوزان', 'سوسن',
        'سيرين', 'سيرينا', 'سيلين', 'شذى', 'شروق', 'شريفة', 'شيرين',
        'شريهان', 'شهد', 'شيرين', 'شيماء', 'صابرين', 'صباح', 'صبرين', 'صفية', 'ضحى', 'ضياء', 'عائشة', 'عيشة', 'العالية', 'عبلة', 'عبير', 'عزيزة', 'عفاف',
        'عنود', 'عهد', 'غادة', 'غدير', 'غرام', 'غزل', 'غصون', 'غفران', 'غنى', 'غيد', 'غيداء', 'غيده', 'فاتن', 'فادية', 'فاديه', 'فاطمة', 'فايزة', 'فتيحة', 'فداء', 'فدوى', 'فرح', 'فريال', 'فريدة', 'فوزية', 'فيروز', 'لبنا', 'لجين', 'لطيفة', 'لمى',
        'لميس', 'ليلى', 'ليليان', 'لينا', 'لينة', 'ليندة', 'مايا', 'ماجدة', 'مديحة', 'مرام', 'مرح', 'مروة', 'مريم', 'مسعودة', 'سعاد', 'ملاك', 'ملك', 'منار', 'منال', 'منى', 'ميادة', 'ميار', 'ميرا', 'ميرال', 'ميس', 'روميساء', 'نائلة', 'نادية', 'نادين', 'نانسي', 'نبيلة', 'نجاة', 'نجلاء', 'نجود', 'نجوى', 'ندى',
        'ندين', 'نرمين', 'نسرين', 'نسيمة', 'نعمت', 'نعمه', 'نهاد', 'نهى', 'نهيدة', 'نوال', 'نور', 'نور الهدى', 'نورة', 'هالة', 'هبة', 'هدى', 'هديل', 'هناء', 'هند', 'هيفاء',
        'وئام', 'وداد', 'ورود', 'وسام', 'سوسن', 'وفاء', 'ولاء', 'يمينة', 'يارا', 'ياسمين', 'يسرى',
        'تاسعديت', 'ثلجة', 'جازية', 'جليلة', 'جنات', 'جهينة', 'جويدة', 'حفصة', 'حيزية', 'حفيظة', 'حورية',
        'حكيمة', 'حدة', 'دلال', 'ذهبية', 'نورية', 'رزيقة', 'ربيحة', 'رشيدة', 'رحاب', 'ربحية', 'رتيبة',
        'فاطمة الزهراء', 'زليخة', 'زهيرة', 'زهور', 'زبيدة', 'سامية', 'سكينة', 'سميحة', 'سعدة', 'سجية',
        'ساجية', 'شافية', 'شهيرة', 'شهرزاد', 'شادية', 'شفيقة', 'صباح', 'طيبة', 'طاهرة', 'ظريفة', 'عقيلة',
        'عمرية', 'عربية', 'غنية', 'غالية', 'فضيلة', 'فريحة', 'فلة', 'قديرة', 'كنزة', 'كوثر', 'كلثوم', 'كاميليا',
        'كريمة', 'لطيفة', 'مباركة', 'منصورية', 'منيرة', 'مفيدة', 'نزيهة', 'نسمة', 'نعيمة', 'نرجس', 'نجيبة',
        'ميمونة', 'مونية', 'هجيرة', 'هاجر', 'نوارة', 'نهلة', 'وسيلة', 'وهيبة',
    );

    protected static $lastName = array(
        'بيقع', 'بوزيدي', 'شوية', 'دراجي', 'محرز', 'بلماضي', 'حميدي', 'بن عيسى', 'شريفي',
        'صيلع', 'بن جدو', 'خليف', 'عيساوي', 'سلامة', 'بونجاح', 'قيراط', 'ضيف', 'دواجي',
        'زيتوت', 'بن سالم', 'جراد', 'بن نبي', 'العروسي', 'دومة', 'جلفاوي', 'نايلي', 'شرفاوي',
        'خلفاوي', 'زيتوني', 'العمري', 'بلعمري', 'نوري', 'قصير', 'جفال', 'هزيل', 'عمراوي',
    );

    protected static $titleMale = array('السيد', 'الأستاذ', 'الدكتور', 'المهندس', 'البروفيسور');
    protected static $titleFemale = array('السيدة', 'الآنسة', 'الدكتورة', 'المهندسة', 'البروفيسورة');
    private static $prefix = array('أ.', 'د.', 'أ.د', 'م.');

    /**
     * @example 'أ.'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }

    /**
     * @example 1010101010
     */
    public static function idNumber()
    {
        $partialValue = static::numerify(
            static::randomElement(array(1, 2)) . str_repeat('#', 8)
        );
        return Luhn::generateLuhnNumber($partialValue);
    }

    /**
     * @example 1010101010
     */
    public static function nationalIdNumber()
    {
        $partialValue = static::numerify(1 . str_repeat('#', 8));
        return Luhn::generateLuhnNumber($partialValue);
    }

    /**
     * @example 2010101010
     */
    public static function foreignerIdNumber()
    {
        $partialValue = static::numerify(2 . str_repeat('#', 8));
        return Luhn::generateLuhnNumber($partialValue);
    }
}
