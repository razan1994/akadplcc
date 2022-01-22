<?php

namespace Database\Seeders;

use App\Models\PublicLanguage;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PublicLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_arr_en = [
            "en" => "English", "ar" => "Arabic", "af" => "Afrikaans", "sq" => "Albanian", "am" => "Amharic", "ar" => "Arabic", "hy" => "Armenian", "az" => "Azerbaijani", "eu" => "Basque", "be" => "Belarusian", "bn" => "Bengali", "bs" => "Bosnian", "bg" => "Bulgarian", "ca" => "Catalan", "ceb" => "Cebuano", "ny" => "Chichewa", "zh-CN" => "Chinese", "zh-TW" => "Chinese (traditional)", "co" => "Corsican", "hr" => "Croatian", "cs" => "Czech", "da" => "Danish", "nl" => "Dutch", "en" => "English", "eo" => "Esperanto", "et" => "Estonian", "tl" => "Filipino", "fi" => "Finnish", "fr" => "French", "fy" => "Frisian", "gl" => "Galician", "ka" => "Georgian", "de" => "German", "el" => "Greek", "gu" => "Gujarati", "ht" => "Haitian Creole", "ha" => "Hausa", "haw" => "Hawaiian", "iw" => "Hebrew", "hi" => "Hindi", "hmn" => "Hmong", "hu" => "Hungarian", "is" => "Icelandic", "ig" => "Igbo", "id" => "Indonesian", "ga" => "Irish", "it" => "Italian", "ja" => "Japanese", "jw" => "Javanese", "kn" => "Kannada", "kk" => "Kazakh", "km" => "Khmer", "rw" => "Kinyarwanda", "ko" => "Korean", "ku" => "Kurdish (Kurmanji)", "ky" => "Kyrgyz", "lo" => "Lao", "la" => "Latin", "lv" => "Latvian", "lt" => "Lithuanian", "lb" => "Luxembourgish", "mk" => "Macedonian", "mg" => "Malagasy", "ms" => "Malay", "ml" => "Malayalam", "mt" => "Maltese", "mi" => "Maori", "mr" => "Marathi", "mn" => "Mongolian", "my" => "Myanmar (Burmese)", "ne" => "Nepali", "no" => "Norwegian", "or" => "Odia (Oriya)", "ps" => "Pashto", "fa" => "Persian", "pl" => "Polish", "pt" => "Portuguese", "pa" => "Punjabi", "ro" => "Romanian", "ru" => "Russian", "sm" => "Samoan", "gd" => "Scots Gaelic", "sr" => "Serbian", "st" => "Sesotho", "sn" => "Shona", "sd" => "Sindhi", "si" => "Sinhala", "sk" => "Slovak", "sl" => "Slovenian", "so" => "Somali", "es" => "Spanish", "su" => "Sundanese", "sw" => "Swahili", "sv" => "Swedish", "tg" => "Tajik", "ta" => "Tamil", "tt" => "Tatar", "te" => "Telugu", "th" => "Thai", "tr" => "Turkish", "tk" => "Turkmen", "uk" => "Ukrainian", "ur" => "Urdu", "ug" => "Uyghur", "uz" => "Uzbek", "vi" => "Vietnamese", "cy" => "Welsh", "xh" => "Xhosa", "yi" => "Yiddish", "yo" => "Yoruba", "zu" => "Zulu"
        ];

        $new_arr_ar = [
            "ar" => "العربية", "is" => "الآيسلندية", "az" => "الأذرية", "ur" => "الأردية", "hy" => "الارمنية", "es" => "الإسبانية", "eo" => "الاسبرانتو",
            "et" => "الإستونية", "gd" => "الاسكتلندية الغالية", "af" => "الأفريقانية", "sq" => "الألبانية", "de" => "الألمانية", "am" => "الأمهرية",
            "en" => "الإنجليزية", "id" => "الإندونيسية", "or" => "الأوديا (الأوريا)", "uz" => "الأوزبكية", "uk" => "الأوكرانية", "ug" => "الأويغورية",
            "ga" => "الأيرلندية", "it" => "الإيطالية", "ig" => "الإيغبو", "eu" => "الباسكية", "ps" => "الباشتوية", "pt" => "البرتغالية", "bg" => "البلغارية",
            "pa" => "البنجابية", "bn" => "البنغالية", "my" => "البورمية", "bs" => "البوسنية", "pl" => "البولندية", "be" => "البيلاروسية", "ta" => "التاميلية", "th" => "التايلاندية",
            "tt" => "التتارية", "tk" => "التركمانية", "tr" => "التركية", "cs" => "التشيكية", "te" => "التيلوجو", "gl" => "الجاليكية", "jw" => "الجاوية",
            "ka" => "الجورجية", "xh" => "الخؤوصا", "km" => "الخميرية", "da" => "الدانماركية", "ru" => "الروسية", "ro" => "الرومانية", "zu" => "الزولوية",
            "sm" => "الساموانية", "su" => "الساندينيزية", "sk" => "السلوفاكية", "sl" => "السلوفينية", "sd" => "السندية", "si" => "السنهالية", "sw" => "السواحيلية",
            "sv" => "السويدية", "ceb" => "السيبيوانية", "st" => "السيسوتو", "sn" => "الشونا", "sr" => "الصربية", "so" => "الصومالية", "zh-TW" => "الصينية (التقليدية)",
            "zh-CN" => "الصينية (المبسطة)", "tg" => "الطاجيكي", "iw" => "العبرية", "gu" => "الغوجراتية", "fa" => "الفارسية", "fr" => "الفرنسية", "fy" => "الفريزية", "tl" => "الفلبينية", "fi" => "الفنلندية", "vi" => "الفيتنامية",
            "ca" => "القطلونية", "ky" => "القيرغيزية", "kk" => "الكازاكي", "kn" => "الكانادا", "ku" => "الكردية", "hr" => "الكرواتية", "co" => "الكورسيكي", "ko" => "الكورية",
            "rw" => "الكينيارواندية", "lv" => "اللاتفية", "la" => "اللاتينية", "lo" => "اللاوو", "ht" => "اللغة الكريولية الهايتية", "lb" => "اللوكسمبورغية",
            "lt" => "الليتوانية", "ml" => "المالايالامية", "mt" => "المالطيّة", "mi" => "الماورية", "mg" => "المدغشقرية", "mk" => "المقدونية", "ms" => "الملايو",
            "mn" => "المنغولية", "mr" => "المهراتية", "no" => "النرويجية", "ne" => "النيبالية", "hmn" => "الهمونجية", "hi" => "الهندية", "hu" => "الهنغارية",
            "ha" => "الهوسا", "nl" => "الهولندية", "cy" => "الويلزية", "yo" => "اليورباية", "el" => "اليونانية", "yi" => "الييدية", "ny" => "تشيتشوا",
            "haw" => "لغة هاواي", "ja" => "ياباني"
        ];



        $keys = array_keys($new_arr_en);

        foreach ($keys as $ctr_keys) {
            PublicLanguage::create([
                'country_id' => $ctr_keys,
                'name_ar' => $new_arr_ar[$ctr_keys],
                'name_en' => $new_arr_en[$ctr_keys],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
