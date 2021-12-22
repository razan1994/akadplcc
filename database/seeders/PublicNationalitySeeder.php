<?php

namespace Database\Seeders;

use App\Models\PublicNationality;
use Illuminate\Database\Seeder;

class PublicNationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [

            [
                "code" => "NN",
                "country_en" => "undefined",
                "country_ar" => "غير محدد",
                "name_en" => "undefined",
                "name_ar" =>  "غير محدد",
            ],
            [
                "code" => "AF",
                "country_en" => " Afghanistan",
                "country_ar" => "أفغانستان",
                "name_en" => "Afghan",
                "name_ar" => "أفغانستاني"
            ],
            [
                "code" => "AL",
                "country_en" => " Albania",
                "country_ar" => "ألبانيا",
                "name_en" => "Albanian",
                "name_ar" => "ألباني"
            ],
            [
                "code" => "AX",
                "country_en" => " Aland Islands",
                "country_ar" => "جزر آلاند",
                "name_en" => "Aland Islander",
                "name_ar" => "آلاندي"
            ],
            [
                "code" => "DZ",
                "country_en" => " Algeria",
                "country_ar" => "الجزائر",
                "name_en" => "Algerian",
                "name_ar" => "جزائري"
            ],
            [
                "code" => "AS",
                "country_en" => " American Samoa",
                "country_ar" => "ساموا-الأمريكي",
                "name_en" => "American Samoan",
                "name_ar" => "أمريكي سامواني"
            ],
            [
                "code" => "AD",
                "country_en" => " Andorra",
                "country_ar" => "أندورا",
                "name_en" => "Andorran",
                "name_ar" => "أندوري"
            ],
            [
                "code" => "AO",
                "country_en" => " Angola",
                "country_ar" => "أنغولا",
                "name_en" => "Angolan",
                "name_ar" => "أنقولي"
            ],
            [
                "code" => "AI",
                "country_en" => " Anguilla",
                "country_ar" => "أنغويلا",
                "name_en" => "Anguillan",
                "name_ar" => "أنغويلي"
            ],
            [
                "code" => "AQ",
                "country_en" => " Antarctica",
                "country_ar" => "أنتاركتيكا",
                "name_en" => "Antarctican",
                "name_ar" => "أنتاركتيكي"
            ],
            [
                "code" => "AG",
                "country_en" => " Antigua and Barbuda",
                "country_ar" => "أنتيغوا وبربودا",
                "name_en" => "Antiguan",
                "name_ar" => "بربودي"
            ],
            [
                "code" => "AR",
                "country_en" => " Argentina",
                "country_ar" => "الأرجنتين",
                "name_en" => "Argentinian",
                "name_ar" => "أرجنتيني"
            ],
            [
                "code" => "AM",
                "country_en" => " Armenia",
                "country_ar" => "أرمينيا",
                "name_en" => "Armenian",
                "name_ar" => "أرميني"
            ],
            [
                "code" => "AW",
                "country_en" => " Aruba",
                "country_ar" => "أروبه",
                "name_en" => "Aruban",
                "name_ar" => "أوروبهيني"
            ],
            [
                "code" => "AU",
                "country_en" => " Australia",
                "country_ar" => "أستراليا",
                "name_en" => "Australian",
                "name_ar" => "أسترالي"
            ],
            [
                "code" => "AT",
                "country_en" => " Austria",
                "country_ar" => "النمسا",
                "name_en" => "Austrian",
                "name_ar" => "نمساوي"
            ],
            [
                "code" => "AZ",
                "country_en" => " Azerbaijan",
                "country_ar" => "أذربيجان",
                "name_en" => "Azerbaijani",
                "name_ar" => "أذربيجاني"
            ],
            [
                "code" => "BS",
                "country_en" => " Bahamas",
                "country_ar" => "الباهاماس",
                "name_en" => "Bahamian",
                "name_ar" => "باهاميسي"
            ],
            [
                "code" => "BH",
                "country_en" => " Bahrain",
                "country_ar" => "البحرين",
                "name_en" => "Bahraini",
                "name_ar" => "بحريني"
            ],
            [
                "code" => "BD",
                "country_en" => " Bangladesh",
                "country_ar" => "بنغلاديش",
                "name_en" => "Bangladeshi",
                "name_ar" => "بنغلاديشي"
            ],
            [
                "code" => "BB",
                "country_en" => " Barbados",
                "country_ar" => "بربادوس",
                "name_en" => "Barbadian",
                "name_ar" => "بربادوسي"
            ],
            [
                "code" => "BY",
                "country_en" => " Belarus",
                "country_ar" => "روسيا البيضاء",
                "name_en" => "Belarusian",
                "name_ar" => "روسي"
            ],
            [
                "code" => "BE",
                "country_en" => " Belgium",
                "country_ar" => "بلجيكا",
                "name_en" => "Belgian",
                "name_ar" => "بلجيكي"
            ],
            [
                "code" => "BZ",
                "country_en" => " Belize",
                "country_ar" => "بيليز",
                "name_en" => "Belizean",
                "name_ar" => "بيليزي"
            ],
            [
                "code" => "BJ",
                "country_en" => " Benin",
                "country_ar" => "بنين",
                "name_en" => "Beninese",
                "name_ar" => "بنيني"
            ],
            [
                "code" => "BL",
                "country_en" => " Saint Barthelemy",
                "country_ar" => "سان بارتيلمي",
                "name_en" => "Saint Barthelmian",
                "name_ar" => "سان بارتيلمي"
            ],
            [
                "code" => "BM",
                "country_en" => " Bermuda",
                "country_ar" => "جزر برمودا",
                "name_en" => "Bermudan",
                "name_ar" => "برمودي"
            ],
            [
                "code" => "BT",
                "country_en" => " Bhutan",
                "country_ar" => "بوتان",
                "name_en" => "Bhutanese",
                "name_ar" => "بوتاني"
            ],
            [
                "code" => "BO",
                "country_en" => " Bolivia",
                "country_ar" => "بوليفيا",
                "name_en" => "Bolivian",
                "name_ar" => "بوليفي"
            ],
            [
                "code" => "BA",
                "country_en" => " Bosnia and Herzegovina",
                "country_ar" => "البوسنة و الهرسك",
                "name_en" => "Bosnian / Herzegovinian",
                "name_ar" => "بوسني/هرسكي"
            ],
            [
                "code" => "BW",
                "country_en" => " Botswana",
                "country_ar" => "بوتسوانا",
                "name_en" => "Botswanan",
                "name_ar" => "بوتسواني"
            ],
            [
                "code" => "BV",
                "country_en" => " Bouvet Island",
                "country_ar" => "جزيرة بوفيه",
                "name_en" => "Bouvetian",
                "name_ar" => "بوفيهي"
            ],
            [
                "code" => "BR",
                "country_en" => " Brazil",
                "country_ar" => "البرازيل",
                "name_en" => "Brazilian",
                "name_ar" => "برازيلي"
            ],
            [
                "code" => "IO",
                "country_en" => " British Indian Ocean Territory",
                "country_ar" => "إقليم المحيط الهندي البريطاني",
                "name_en" => "British Indian Ocean Territory",
                "name_ar" => "إقليم المحيط الهندي البريطاني"
            ],
            [
                "code" => "BN",
                "country_en" => " Brunei Darussalam",
                "country_ar" => "بروني",
                "name_en" => "Bruneian",
                "name_ar" => "بروني"
            ],
            [
                "code" => "BG",
                "country_en" => " Bulgaria",
                "country_ar" => "بلغاريا",
                "name_en" => "Bulgarian",
                "name_ar" => "بلغاري"
            ],
            [
                "code" => "BF",
                "country_en" => " Burkina Faso",
                "country_ar" => "بوركينا فاسو",
                "name_en" => "Burkinabe",
                "name_ar" => "بوركيني"
            ],
            [
                "code" => "BI",
                "country_en" => " Burundi",
                "country_ar" => "بوروندي",
                "name_en" => "Burundian",
                "name_ar" => "بورونيدي"
            ],
            [
                "code" => "KH",
                "country_en" => " Cambodia",
                "country_ar" => "كمبوديا",
                "name_en" => "Cambodian",
                "name_ar" => "كمبودي"
            ],
            [
                "code" => "CM",
                "country_en" => " Cameroon",
                "country_ar" => "كاميرون",
                "name_en" => "Cameroonian",
                "name_ar" => "كاميروني"
            ],
            [
                "code" => "CA",
                "country_en" => " Canada",
                "country_ar" => "كندا",
                "name_en" => "Canadian",
                "name_ar" => "كندي"
            ],
            [
                "code" => "CV",
                "country_en" => " Cape Verde",
                "country_ar" => "الرأس الأخضر",
                "name_en" => "Cape Verdean",
                "name_ar" => "الرأس الأخضر"
            ],
            [
                "code" => "KY",
                "country_en" => " Cayman Islands",
                "country_ar" => "جزر كايمان",
                "name_en" => "Caymanian",
                "name_ar" => "كايماني"
            ],
            [
                "code" => "CF",
                "country_en" => " Central African Republic",
                "country_ar" => "جمهورية أفريقيا الوسطى",
                "name_en" => "Central African",
                "name_ar" => "أفريقي"
            ],
            [
                "code" => "TD",
                "country_en" => " Chad",
                "country_ar" => "تشاد",
                "name_en" => "Chadian",
                "name_ar" => "تشادي"
            ],
            [
                "code" => "CL",
                "country_en" => " Chile",
                "country_ar" => "شيلي",
                "name_en" => "Chilean",
                "name_ar" => "شيلي"
            ],
            [
                "code" => "CN",
                "country_en" => " China",
                "country_ar" => "الصين",
                "name_en" => "Chinese",
                "name_ar" => "صيني"
            ],
            [
                "code" => "CX",
                "country_en" => " Christmas Island",
                "country_ar" => "جزيرة عيد الميلاد",
                "name_en" => "Christmas Islander",
                "name_ar" => "جزيرة عيد الميلاد"
            ],
            [
                "code" => "CC",
                "country_en" => " Cocos (Keeling) Islands",
                "country_ar" => "جزر كوكوس",
                "name_en" => "Cocos Islander",
                "name_ar" => "جزر كوكوس"
            ],
            [
                "code" => "CO",
                "country_en" => " Colombia",
                "country_ar" => "كولومبيا",
                "name_en" => "Colombian",
                "name_ar" => "كولومبي"
            ],
            [
                "code" => "KM",
                "country_en" => " Comoros",
                "country_ar" => "جزر القمر",
                "name_en" => "Comorian",
                "name_ar" => "جزر القمر"
            ],
            [
                "code" => "CG",
                "country_en" => " Congo",
                "country_ar" => "الكونغو",
                "name_en" => "Congolese",
                "name_ar" => "كونغي"
            ],
            [
                "code" => "CK",
                "country_en" => " Cook Islands",
                "country_ar" => "جزر كوك",
                "name_en" => "Cook Islander",
                "name_ar" => "جزر كوك"
            ],
            [
                "code" => "CR",
                "country_en" => " Costa Rica",
                "country_ar" => "كوستاريكا",
                "name_en" => "Costa Rican",
                "name_ar" => "كوستاريكي"
            ],
            [
                "code" => "HR",
                "country_en" => " Croatia",
                "country_ar" => "كرواتيا",
                "name_en" => "Croatian",
                "name_ar" => "كوراتي"
            ],
            [
                "code" => "CU",
                "country_en" => " Cuba",
                "country_ar" => "كوبا",
                "name_en" => "Cuban",
                "name_ar" => "كوبي"
            ],
            [
                "code" => "CY",
                "country_en" => " Cyprus",
                "country_ar" => "قبرص",
                "name_en" => "Cypriot",
                "name_ar" => "قبرصي"
            ],
            [
                "code" => "CW",
                "country_en" => " Curaçao",
                "country_ar" => "كوراساو",
                "name_en" => "Curacian",
                "name_ar" => "كوراساوي"
            ],
            [
                "code" => "CZ",
                "country_en" => " Czech Republic",
                "country_ar" => "الجمهورية التشيكية",
                "name_en" => "Czech",
                "name_ar" => "تشيكي"
            ],
            [
                "code" => "DK",
                "country_en" => " Denmark",
                "country_ar" => "الدانمارك",
                "name_en" => "Danish",
                "name_ar" => "دنماركي"
            ],
            [
                "code" => "DJ",
                "country_en" => " Djibouti",
                "country_ar" => "جيبوتي",
                "name_en" => "Djiboutian",
                "name_ar" => "جيبوتي"
            ],
            [
                "code" => "DM",
                "country_en" => " Dominica",
                "country_ar" => "دومينيكا",
                "name_en" => "Dominican",
                "name_ar" => "دومينيكي"
            ],
            [
                "code" => "DO",
                "country_en" => " Dominican Republic",
                "country_ar" => "الجمهورية الدومينيكية",
                "name_en" => "Dominican",
                "name_ar" => "دومينيكي"
            ],
            [
                "code" => "EC",
                "country_en" => " Ecuador",
                "country_ar" => "إكوادور",
                "name_en" => "Ecuadorian",
                "name_ar" => "إكوادوري"
            ],
            [
                "code" => "EG",
                "country_en" => " Egypt",
                "country_ar" => "مصر",
                "name_en" => "Egyptian",
                "name_ar" => "مصري"
            ],
            [
                "code" => "SV",
                "country_en" => " El Salvador",
                "country_ar" => "إلسلفادور",
                "name_en" => "Salvadoran",
                "name_ar" => "سلفادوري"
            ],
            [
                "code" => "GQ",
                "country_en" => " Equatorial Guinea",
                "country_ar" => "غينيا الاستوائي",
                "name_en" => "Equatorial Guinean",
                "name_ar" => "غيني"
            ],
            [
                "code" => "ER",
                "country_en" => " Eritrea",
                "country_ar" => "إريتريا",
                "name_en" => "Eritrean",
                "name_ar" => "إريتيري"
            ],
            [
                "code" => "EE",
                "country_en" => " Estonia",
                "country_ar" => "استونيا",
                "name_en" => "Estonian",
                "name_ar" => "استوني"
            ],
            [
                "code" => "ET",
                "country_en" => " Ethiopia",
                "country_ar" => "أثيوبيا",
                "name_en" => "Ethiopian",
                "name_ar" => "أثيوبي"
            ],
            [
                "code" => "FK",
                "country_en" => " Falkland Islands (Malvinas)",
                "country_ar" => "جزر فوكلاند",
                "name_en" => "Falkland Islander",
                "name_ar" => "فوكلاندي"
            ],
            [
                "code" => "FO",
                "country_en" => " Faroe Islands",
                "country_ar" => "جزر فارو",
                "name_en" => "Faroese",
                "name_ar" => "جزر فارو"
            ],
            [
                "code" => "FJ",
                "country_en" => " Fiji",
                "country_ar" => "فيجي",
                "name_en" => "Fijian",
                "name_ar" => "فيجي"
            ],
            [
                "code" => "FI",
                "country_en" => " Finland",
                "country_ar" => "فنلندا",
                "name_en" => "Finnish",
                "name_ar" => "فنلندي"
            ],
            [
                "code" => "FR",
                "country_en" => " France",
                "country_ar" => "فرنسا",
                "name_en" => "French",
                "name_ar" => "فرنسي"
            ],
            [
                "code" => "GF",
                "country_en" => " French Guiana",
                "country_ar" => "غويانا الفرنسية",
                "name_en" => "French Guianese",
                "name_ar" => "غويانا الفرنسية"
            ],
            [
                "code" => "PF",
                "country_en" => " French Polynesia",
                "country_ar" => "بولينيزيا الفرنسية",
                "name_en" => "French Polynesian",
                "name_ar" => "بولينيزيي"
            ],
            [
                "code" => "TF",
                "country_en" => " French Southern and Antarctic Lands",
                "country_ar" => "أراض فرنسية جنوبية وأنتارتيكية",
                "name_en" => "French",
                "name_ar" => "أراض فرنسية جنوبية وأنتارتيكية"
            ],
            [
                "code" => "GA",
                "country_en" => " Gabon",
                "country_ar" => "الغابون",
                "name_en" => "Gabonese",
                "name_ar" => "غابوني"
            ],
            [
                "code" => "GM",
                "country_en" => " Gambia",
                "country_ar" => "غامبيا",
                "name_en" => "Gambian",
                "name_ar" => "غامبي"
            ],
            [
                "code" => "GE",
                "country_en" => " Georgia",
                "country_ar" => "جيورجيا",
                "name_en" => "Georgian",
                "name_ar" => "جيورجي"
            ],
            [
                "code" => "DE",
                "country_en" => " Germany",
                "country_ar" => "ألمانيا",
                "name_en" => "German",
                "name_ar" => "ألماني"
            ],
            [
                "code" => "GH",
                "country_en" => " Ghana",
                "country_ar" => "غانا",
                "name_en" => "Ghanaian",
                "name_ar" => "غاني"
            ],
            [
                "code" => "GI",
                "country_en" => " Gibraltar",
                "country_ar" => "جبل طارق",
                "name_en" => "Gibraltar",
                "name_ar" => "جبل طارق"
            ],
            [
                "code" => "GG",
                "country_en" => " Guernsey",
                "country_ar" => "غيرنزي",
                "name_en" => "Guernsian",
                "name_ar" => "غيرنزي"
            ],
            [
                "code" => "GR",
                "country_en" => " Greece",
                "country_ar" => "اليونان",
                "name_en" => "Greek",
                "name_ar" => "يوناني"
            ],
            [
                "code" => "GL",
                "country_en" => " Greenland",
                "country_ar" => "جرينلاند",
                "name_en" => "Greenlandic",
                "name_ar" => "جرينلاندي"
            ],
            [
                "code" => "GD",
                "country_en" => " Grenada",
                "country_ar" => "غرينادا",
                "name_en" => "Grenadian",
                "name_ar" => "غرينادي"
            ],
            [
                "code" => "GP",
                "country_en" => " Guadeloupe",
                "country_ar" => "جزر جوادلوب",
                "name_en" => "Guadeloupe",
                "name_ar" => "جزر جوادلوب"
            ],
            [
                "code" => "GU",
                "country_en" => " Guam",
                "country_ar" => "جوام",
                "name_en" => "Guamanian",
                "name_ar" => "جوامي"
            ],
            [
                "code" => "GT",
                "country_en" => " Guatemala",
                "country_ar" => "غواتيمال",
                "name_en" => "Guatemalan",
                "name_ar" => "غواتيمالي"
            ],
            [
                "code" => "GN",
                "country_en" => " Guinea",
                "country_ar" => "غينيا",
                "name_en" => "Guinean",
                "name_ar" => "غيني"
            ],
            [
                "code" => "GW",
                "country_en" => " Guinea-Bissau",
                "country_ar" => "غينيا-بيساو",
                "name_en" => "Guinea-Bissauan",
                "name_ar" => "غيني"
            ],
            [
                "code" => "GY",
                "country_en" => " Guyana",
                "country_ar" => "غيانا",
                "name_en" => "Guyanese",
                "name_ar" => "غياني"
            ],
            [
                "code" => "HT",
                "country_en" => " Haiti",
                "country_ar" => "هايتي",
                "name_en" => "Haitian",
                "name_ar" => "هايتي"
            ],
            [
                "code" => "HM",
                "country_en" => " Heard and Mc Donald Islands",
                "country_ar" => "جزيرة هيرد وجزر ماكدونالد",
                "name_en" => "Heard and Mc Donald Islanders",
                "name_ar" => "جزيرة هيرد وجزر ماكدونالد"
            ],
            [
                "code" => "HN",
                "country_en" => " Honduras",
                "country_ar" => "هندوراس",
                "name_en" => "Honduran",
                "name_ar" => "هندوراسي"
            ],
            [
                "code" => "HK",
                "country_en" => " Hong Kong",
                "country_ar" => "هونغ كونغ",
                "name_en" => "Hongkongese",
                "name_ar" => "هونغ كونغي"
            ],
            [
                "code" => "HU",
                "country_en" => " Hungary",
                "country_ar" => "المجر",
                "name_en" => "Hungarian",
                "name_ar" => "مجري"
            ],
            [
                "code" => "IS",
                "country_en" => " Iceland",
                "country_ar" => "آيسلندا",
                "name_en" => "Icelandic",
                "name_ar" => "آيسلندي"
            ],
            [
                "code" => "IN",
                "country_en" => " India",
                "country_ar" => "الهند",
                "name_en" => "Indian",
                "name_ar" => "هندي"
            ],
            [
                "code" => "IM",
                "country_en" => " Isle of Man",
                "country_ar" => "جزيرة مان",
                "name_en" => "Manx",
                "name_ar" => "ماني"
            ],
            [
                "code" => "ID",
                "country_en" => " Indonesia",
                "country_ar" => "أندونيسيا",
                "name_en" => "Indonesian",
                "name_ar" => "أندونيسيي"
            ],
            [
                "code" => "IR",
                "country_en" => " Iran",
                "country_ar" => "إيران",
                "name_en" => "Iranian",
                "name_ar" => "إيراني"
            ],
            [
                "code" => "IQ",
                "country_en" => " Iraq",
                "country_ar" => "العراق",
                "name_en" => "Iraqi",
                "name_ar" => "عراقي"
            ],
            [
                "code" => "IE",
                "country_en" => " Ireland",
                "country_ar" => "إيرلندا",
                "name_en" => "Irish",
                "name_ar" => "إيرلندي"
            ],
            [
                "code" => "IT",
                "country_en" => " Italy",
                "country_ar" => "إيطاليا",
                "name_en" => "Italian",
                "name_ar" => "إيطالي"
            ],
            [
                "code" => "CI",
                "country_en" => " Ivory Coast",
                "country_ar" => "ساحل العاج",
                "name_en" => "Ivory Coastian",
                "name_ar" => "ساحل العاج"
            ],
            [
                "code" => "JE",
                "country_en" => " Jersey",
                "country_ar" => "جيرزي",
                "name_en" => "Jersian",
                "name_ar" => "جيرزي"
            ],
            [
                "code" => "JM",
                "country_en" => " Jamaica",
                "country_ar" => "جمايكا",
                "name_en" => "Jamaican",
                "name_ar" => "جمايكي"
            ],
            [
                "code" => "JP",
                "country_en" => " Japan",
                "country_ar" => "اليابان",
                "name_en" => "Japanese",
                "name_ar" => "ياباني"
            ],
            [
                "code" => "JO",
                "country_en" => " Jordan",
                "country_ar" => "الأردن",
                "name_en" => "Jordanian",
                "name_ar" => "أردني"
            ],
            [
                "code" => "KZ",
                "country_en" => " Kazakhstan",
                "country_ar" => "كازاخستان",
                "name_en" => "Kazakh",
                "name_ar" => "كازاخستاني"
            ],
            [
                "code" => "KE",
                "country_en" => " Kenya",
                "country_ar" => "كينيا",
                "name_en" => "Kenyan",
                "name_ar" => "كيني"
            ],
            [
                "code" => "KI",
                "country_en" => " Kiribati",
                "country_ar" => "كيريباتي",
                "name_en" => "I-Kiribati",
                "name_ar" => "كيريباتي"
            ],
            [
                "code" => "KP",
                "country_en" => " Korea(North Korea)",
                "country_ar" => "كوريا الشمالية",
                "name_en" => "North Korean",
                "name_ar" => "كوري"
            ],
            [
                "code" => "KR",
                "country_en" => " Korea(South Korea)",
                "country_ar" => "كوريا الجنوبية",
                "name_en" => "South Korean",
                "name_ar" => "كوري"
            ],
            [
                "code" => "XK",
                "country_en" => " Kosovo",
                "country_ar" => "كوسوفو",
                "name_en" => "Kosovar",
                "name_ar" => "كوسيفي"
            ],
            [
                "code" => "KW",
                "country_en" => " Kuwait",
                "country_ar" => "الكويت",
                "name_en" => "Kuwaiti",
                "name_ar" => "كويتي"
            ],
            [
                "code" => "KG",
                "country_en" => " Kyrgyzstan",
                "country_ar" => "قيرغيزستان",
                "name_en" => "Kyrgyzstani",
                "name_ar" => "قيرغيزستاني"
            ],
            [
                "code" => "LA",
                "country_en" => " Lao PDR",
                "country_ar" => "لاوس",
                "name_en" => "Laotian",
                "name_ar" => "لاوسي"
            ],
            [
                "code" => "LV",
                "country_en" => " Latvia",
                "country_ar" => "لاتفيا",
                "name_en" => "Latvian",
                "name_ar" => "لاتيفي"
            ],
            [
                "code" => "LB",
                "country_en" => " Lebanon",
                "country_ar" => "لبنان",
                "name_en" => "Lebanese",
                "name_ar" => "لبناني"
            ],
            [
                "code" => "LS",
                "country_en" => " Lesotho",
                "country_ar" => "ليسوتو",
                "name_en" => "Basotho",
                "name_ar" => "ليوسيتي"
            ],
            [
                "code" => "LR",
                "country_en" => " Liberia",
                "country_ar" => "ليبيريا",
                "name_en" => "Liberian",
                "name_ar" => "ليبيري"
            ],
            [
                "code" => "LY",
                "country_en" => " Libya",
                "country_ar" => "ليبيا",
                "name_en" => "Libyan",
                "name_ar" => "ليبي"
            ],
            [
                "code" => "LI",
                "country_en" => " Liechtenstein",
                "country_ar" => "ليختنشتين",
                "name_en" => "Liechtenstein",
                "name_ar" => "ليختنشتيني"
            ],
            [
                "code" => "LT",
                "country_en" => " Lithuania",
                "country_ar" => "لتوانيا",
                "name_en" => "Lithuanian",
                "name_ar" => "لتوانيي"
            ],
            [
                "code" => "LU",
                "country_en" => " Luxembourg",
                "country_ar" => "لوكسمبورغ",
                "name_en" => "Luxembourger",
                "name_ar" => "لوكسمبورغي"
            ],
            [
                "code" => "LK",
                "country_en" => " Sri Lanka",
                "country_ar" => "سريلانكا",
                "name_en" => "Sri Lankian",
                "name_ar" => "سريلانكي"
            ],
            [
                "code" => "MO",
                "country_en" => " Macau",
                "country_ar" => "ماكاو",
                "name_en" => "Macanese",
                "name_ar" => "ماكاوي"
            ],
            [
                "code" => "MK",
                "country_en" => " Macedonia",
                "country_ar" => "مقدونيا",
                "name_en" => "Macedonian",
                "name_ar" => "مقدوني"
            ],
            [
                "code" => "MG",
                "country_en" => " Madagascar",
                "country_ar" => "مدغشقر",
                "name_en" => "Malagasy",
                "name_ar" => "مدغشقري"
            ],
            [
                "code" => "MW",
                "country_en" => " Malawi",
                "country_ar" => "مالاوي",
                "name_en" => "Malawian",
                "name_ar" => "مالاوي"
            ],
            [
                "code" => "MY",
                "country_en" => " Malaysia",
                "country_ar" => "ماليزيا",
                "name_en" => "Malaysian",
                "name_ar" => "ماليزي"
            ],
            [
                "code" => "MV",
                "country_en" => " Maldives",
                "country_ar" => "المالديف",
                "name_en" => "Maldivian",
                "name_ar" => "مالديفي"
            ],
            [
                "code" => "ML",
                "country_en" => " Mali",
                "country_ar" => "مالي",
                "name_en" => "Malian",
                "name_ar" => "مالي"
            ],
            [
                "code" => "MT",
                "country_en" => " Malta",
                "country_ar" => "مالطا",
                "name_en" => "Maltese",
                "name_ar" => "مالطي"
            ],
            [
                "code" => "MH",
                "country_en" => " Marshall Islands",
                "country_ar" => "جزر مارشال",
                "name_en" => "Marshallese",
                "name_ar" => "مارشالي"
            ],
            [
                "code" => "MQ",
                "country_en" => " Martinique",
                "country_ar" => "مارتينيك",
                "name_en" => "Martiniquais",
                "name_ar" => "مارتينيكي"
            ],
            [
                "code" => "MR",
                "country_en" => " Mauritania",
                "country_ar" => "موريتانيا",
                "name_en" => "Mauritanian",
                "name_ar" => "موريتانيي"
            ],
            [
                "code" => "MU",
                "country_en" => " Mauritius",
                "country_ar" => "موريشيوس",
                "name_en" => "Mauritian",
                "name_ar" => "موريشيوسي"
            ],
            [
                "code" => "YT",
                "country_en" => " Mayotte",
                "country_ar" => "مايوت",
                "name_en" => "Mahoran",
                "name_ar" => "مايوتي"
            ],
            [
                "code" => "MX",
                "country_en" => " Mexico",
                "country_ar" => "المكسيك",
                "name_en" => "Mexican",
                "name_ar" => "مكسيكي"
            ],
            [
                "code" => "FM",
                "country_en" => " Micronesia",
                "country_ar" => "مايكرونيزيا",
                "name_en" => "Micronesian",
                "name_ar" => "مايكرونيزيي"
            ],
            [
                "code" => "MD",
                "country_en" => " Moldova",
                "country_ar" => "مولدافيا",
                "name_en" => "Moldovan",
                "name_ar" => "مولديفي"
            ],
            [
                "code" => "MC",
                "country_en" => " Monaco",
                "country_ar" => "موناكو",
                "name_en" => "Monacan",
                "name_ar" => "مونيكي"
            ],
            [
                "code" => "MN",
                "country_en" => " Mongolia",
                "country_ar" => "منغوليا",
                "name_en" => "Mongolian",
                "name_ar" => "منغولي"
            ],
            [
                "code" => "ME",
                "country_en" => " Montenegro",
                "country_ar" => "الجبل الأسود",
                "name_en" => "Montenegrin",
                "name_ar" => "الجبل الأسود"
            ],
            [
                "code" => "MS",
                "country_en" => " Montserrat",
                "country_ar" => "مونتسيرات",
                "name_en" => "Montserratian",
                "name_ar" => "مونتسيراتي"
            ],
            [
                "code" => "MA",
                "country_en" => " Morocco",
                "country_ar" => "المغرب",
                "name_en" => "Moroccan",
                "name_ar" => "مغربي"
            ],
            [
                "code" => "MZ",
                "country_en" => " Mozambique",
                "country_ar" => "موزمبيق",
                "name_en" => "Mozambican",
                "name_ar" => "موزمبيقي"
            ],
            [
                "code" => "MM",
                "country_en" => " Myanmar",
                "country_ar" => "ميانمار",
                "name_en" => "Myanmarian",
                "name_ar" => "ميانماري"
            ],
            [
                "code" => "NA",
                "country_en" => " Namibia",
                "country_ar" => "ناميبيا",
                "name_en" => "Namibian",
                "name_ar" => "ناميبي"
            ],
            [
                "code" => "NR",
                "country_en" => " Nauru",
                "country_ar" => "نورو",
                "name_en" => "Nauruan",
                "name_ar" => "نوري"
            ],
            [
                "code" => "NP",
                "country_en" => " Nepal",
                "country_ar" => "نيبال",
                "name_en" => "Nepalese",
                "name_ar" => "نيبالي"
            ],
            [
                "code" => "NL",
                "country_en" => " Netherlands",
                "country_ar" => "هولندا",
                "name_en" => "Dutch",
                "name_ar" => "هولندي"
            ],
            [
                "code" => "AN",
                "country_en" => " Netherlands Antilles",
                "country_ar" => "جزر الأنتيل الهولندي",
                "name_en" => "Dutch Antilier",
                "name_ar" => "هولندي"
            ],
            [
                "code" => "NC",
                "country_en" => " New Caledonia",
                "country_ar" => "كاليدونيا الجديدة",
                "name_en" => "New Caledonian",
                "name_ar" => "كاليدوني"
            ],
            [
                "code" => "NZ",
                "country_en" => " New Zealand",
                "country_ar" => "نيوزيلندا",
                "name_en" => "New Zealander",
                "name_ar" => "نيوزيلندي"
            ],
            [
                "code" => "NI",
                "country_en" => " Nicaragua",
                "country_ar" => "نيكاراجوا",
                "name_en" => "Nicaraguan",
                "name_ar" => "نيكاراجوي"
            ],
            [
                "code" => "NE",
                "country_en" => " Niger",
                "country_ar" => "النيجر",
                "name_en" => "Nigerien",
                "name_ar" => "نيجيري"
            ],
            [
                "code" => "NG",
                "country_en" => " Nigeria",
                "country_ar" => "نيجيريا",
                "name_en" => "Nigerian",
                "name_ar" => "نيجيري"
            ],
            [
                "code" => "NU",
                "country_en" => " Niue",
                "country_ar" => "ني",
                "name_en" => "Niuean",
                "name_ar" => "ني"
            ],
            [
                "code" => "NF",
                "country_en" => " Norfolk Island",
                "country_ar" => "جزيرة نورفولك",
                "name_en" => "Norfolk Islander",
                "name_ar" => "نورفوليكي"
            ],
            [
                "code" => "MP",
                "country_en" => " Northern Mariana Islands",
                "country_ar" => "جزر ماريانا الشمالية",
                "name_en" => "Northern Marianan",
                "name_ar" => "ماريني"
            ],
            [
                "code" => "NO",
                "country_en" => " Norway",
                "country_ar" => "النرويج",
                "name_en" => "Norwegian",
                "name_ar" => "نرويجي"
            ],
            [
                "code" => "OM",
                "country_en" => " Oman",
                "country_ar" => "عمان",
                "name_en" => "Omani",
                "name_ar" => "عماني"
            ],
            [
                "code" => "PK",
                "country_en" => " Pakistan",
                "country_ar" => "باكستان",
                "name_en" => "Pakistani",
                "name_ar" => "باكستاني"
            ],
            [
                "code" => "PW",
                "country_en" => " Palau",
                "country_ar" => "بالاو",
                "name_en" => "Palauan",
                "name_ar" => "بالاوي"
            ],
            [
                "code" => "PS",
                "country_en" => " Palestine",
                "country_ar" => "فلسطين",
                "name_en" => "Palestinian",
                "name_ar" => "فلسطيني"
            ],
            [
                "code" => "PA",
                "country_en" => " Panama",
                "country_ar" => "بنما",
                "name_en" => "Panamanian",
                "name_ar" => "بنمي"
            ],
            [
                "code" => "PG",
                "country_en" => " Papua New Guinea",
                "country_ar" => "بابوا غينيا الجديدة",
                "name_en" => "Papua New Guinean",
                "name_ar" => "بابوي"
            ],
            [
                "code" => "PY",
                "country_en" => " Paraguay",
                "country_ar" => "باراغواي",
                "name_en" => "Paraguayan",
                "name_ar" => "بارغاوي"
            ],
            [
                "code" => "PE",
                "country_en" => " Peru",
                "country_ar" => "بيرو",
                "name_en" => "Peruvian",
                "name_ar" => "بيري"
            ],
            [
                "code" => "PH",
                "country_en" => " Philippines",
                "country_ar" => "الفليبين",
                "name_en" => "Filipino",
                "name_ar" => "فلبيني"
            ],
            [
                "code" => "PN",
                "country_en" => " Pitcairn",
                "country_ar" => "بيتكيرن",
                "name_en" => "Pitcairn Islander",
                "name_ar" => "بيتكيرني"
            ],
            [
                "code" => "PL",
                "country_en" => " Poland",
                "country_ar" => "بولونيا",
                "name_en" => "Polish",
                "name_ar" => "بوليني"
            ],
            [
                "code" => "PT",
                "country_en" => " Portugal",
                "country_ar" => "البرتغال",
                "name_en" => "Portuguese",
                "name_ar" => "برتغالي"
            ],
            [
                "code" => "PR",
                "country_en" => " Puerto Rico",
                "country_ar" => "بورتو ريكو",
                "name_en" => "Puerto Rican",
                "name_ar" => "بورتي"
            ],
            [
                "code" => "QA",
                "country_en" => " Qatar",
                "country_ar" => "قطر",
                "name_en" => "Qatari",
                "name_ar" => "قطري"
            ],
            [
                "code" => "RE",
                "country_en" => " Reunion Island",
                "country_ar" => "ريونيون",
                "name_en" => "Reunionese",
                "name_ar" => "ريونيوني"
            ],
            [
                "code" => "RO",
                "country_en" => " Romania",
                "country_ar" => "رومانيا",
                "name_en" => "Romanian",
                "name_ar" => "روماني"
            ],
            [
                "code" => "RU",
                "country_en" => " Russian",
                "country_ar" => "روسيا",
                "name_en" => "Russian",
                "name_ar" => "روسي"
            ],
            [
                "code" => "RW",
                "country_en" => " Rwanda",
                "country_ar" => "رواندا",
                "name_en" => "Rwandan",
                "name_ar" => "رواندا"
            ],
            [
                "code" => "KN",
                "country_en" => " Saint Kitts and Nevis",
                "country_ar" => "سانت كيتس ونيفس",
                "name_en" => "",
                "name_ar" => "Kittitian/Nevisian"
            ],
            [
                "code" => "MF",
                "country_en" => " Saint Martin (French part)",
                "country_ar" => "ساينت مارتن فرنسي",
                "name_en" => "St. Martian(French)",
                "name_ar" => "ساينت مارتني فرنسي"
            ],
            [
                "code" => "SX",
                "country_en" => " Sint Maarten (Dutch part)",
                "country_ar" => "ساينت مارتن هولندي",
                "name_en" => "St. Martian(Dutch)",
                "name_ar" => "ساينت مارتني هولندي"
            ],
            [
                "code" => "LC",
                "country_en" => " Saint Pierre and Miquelon",
                "country_ar" => "سان بيير وميكلون",
                "name_en" => "St. Pierre and Miquelon",
                "name_ar" => "سان بيير وميكلوني"
            ],
            [
                "code" => "VC",
                "country_en" => " Saint Vincent and the Grenadines",
                "country_ar" => "سانت فنسنت وجزر غرينادين",
                "name_en" => "Saint Vincent and the Grenadines",
                "name_ar" => "سانت فنسنت وجزر غرينادين"
            ],
            [
                "code" => "WS",
                "country_en" => " Samoa",
                "country_ar" => "ساموا",
                "name_en" => "Samoan",
                "name_ar" => "ساموي"
            ],
            [
                "code" => "SM",
                "country_en" => " San Marino",
                "country_ar" => "سان مارينو",
                "name_en" => "Sammarinese",
                "name_ar" => "ماريني"
            ],
            [
                "code" => "ST",
                "country_en" => " Sao Tome and Principe",
                "country_ar" => "ساو تومي وبرينسيبي",
                "name_en" => "Sao Tomean",
                "name_ar" => "ساو تومي وبرينسيبي"
            ],
            [
                "code" => "SA",
                "country_en" => " Saudi Arabia",
                "country_ar" => "المملكة العربية السعودية",
                "name_en" => "Saudi Arabian",
                "name_ar" => "سعودي"
            ],
            [
                "code" => "SN",
                "country_en" => " Senegal",
                "country_ar" => "السنغال",
                "name_en" => "Senegalese",
                "name_ar" => "سنغالي"
            ],
            [
                "code" => "RS",
                "country_en" => " Serbia",
                "country_ar" => "صربيا",
                "name_en" => "Serbian",
                "name_ar" => "صربي"
            ],
            [
                "code" => "SC",
                "country_en" => " Seychelles",
                "country_ar" => "سيشيل",
                "name_en" => "Seychellois",
                "name_ar" => "سيشيلي"
            ],
            [
                "code" => "SL",
                "country_en" => " Sierra Leone",
                "country_ar" => "سيراليون",
                "name_en" => "Sierra Leonean",
                "name_ar" => "سيراليوني"
            ],
            [
                "code" => "SG",
                "country_en" => " Singapore",
                "country_ar" => "سنغافورة",
                "name_en" => "Singaporean",
                "name_ar" => "سنغافوري"
            ],
            [
                "code" => "SK",
                "country_en" => " Slovakia",
                "country_ar" => "سلوفاكيا",
                "name_en" => "Slovak",
                "name_ar" => "سولفاكي"
            ],
            [
                "code" => "SI",
                "country_en" => " Slovenia",
                "country_ar" => "سلوفينيا",
                "name_en" => "Slovenian",
                "name_ar" => "سولفيني"
            ],
            [
                "code" => "SB",
                "country_en" => " Solomon Islands",
                "country_ar" => "جزر سليمان",
                "name_en" => "Solomon Island",
                "name_ar" => "جزر سليمان"
            ],
            [
                "code" => "SO",
                "country_en" => " Somalia",
                "country_ar" => "الصومال",
                "name_en" => "Somali",
                "name_ar" => "صومالي"
            ],
            [
                "code" => "ZA",
                "country_en" => " South Africa",
                "country_ar" => "جنوب أفريقيا",
                "name_en" => "South African",
                "name_ar" => "أفريقي"
            ],
            [
                "code" => "GS",
                "country_en" => " South Georgia and the South Sandwich",
                "country_ar" => "المنطقة القطبية الجنوبية",
                "name_en" => "South Georgia and the South Sandwich",
                "name_ar" => "لمنطقة القطبية الجنوبية"
            ],
            [
                "code" => "SS",
                "country_en" => " South Sudan",
                "country_ar" => "السودان الجنوبي",
                "name_en" => "South Sudanese",
                "name_ar" => "سوادني جنوبي"
            ],
            [
                "code" => "ES",
                "country_en" => " Spain",
                "country_ar" => "إسبانيا",
                "name_en" => "Spanish",
                "name_ar" => "إسباني"
            ],
            [
                "code" => "SH",
                "country_en" => " Saint Helena",
                "country_ar" => "سانت هيلانة",
                "name_en" => "St. Helenian",
                "name_ar" => "هيلاني"
            ],
            [
                "code" => "SD",
                "country_en" => " Sudan",
                "country_ar" => "السودان",
                "name_en" => "Sudanese",
                "name_ar" => "سوداني"
            ],
            [
                "code" => "SR",
                "country_en" => " Suriname",
                "country_ar" => "سورينام",
                "name_en" => "Surinamese",
                "name_ar" => "سورينامي"
            ],
            [
                "code" => "SJ",
                "country_en" => " Svalbard and Jan Mayen",
                "country_ar" => "سفالبارد ويان ماين",
                "name_en" => "Svalbardian/Jan Mayenian",
                "name_ar" => "سفالبارد ويان ماين"
            ],
            [
                "code" => "SZ",
                "country_en" => " Swaziland",
                "country_ar" => "سوازيلند",
                "name_en" => "Swazi",
                "name_ar" => "سوازيلندي"
            ],
            [
                "code" => "SE",
                "country_en" => " Sweden",
                "country_ar" => "السويد",
                "name_en" => "Swedish",
                "name_ar" => "سويدي"
            ],
            [
                "code" => "CH",
                "country_en" => " Switzerland",
                "country_ar" => "سويسرا",
                "name_en" => "Swiss",
                "name_ar" => "سويسري"
            ],
            [
                "code" => "SY",
                "country_en" => " Syria",
                "country_ar" => "سوريا",
                "name_en" => "Syrian",
                "name_ar" => "سوري"
            ],
            [
                "code" => "TW",
                "country_en" => " Taiwan",
                "country_ar" => "تايوان",
                "name_en" => "Taiwanese",
                "name_ar" => "تايواني"
            ],
            [
                "code" => "TJ",
                "country_en" => " Tajikistan",
                "country_ar" => "طاجيكستان",
                "name_en" => "Tajikistani",
                "name_ar" => "طاجيكستاني"
            ],
            [
                "code" => "TZ",
                "country_en" => " Tanzania",
                "country_ar" => "تنزانيا",
                "name_en" => "Tanzanian",
                "name_ar" => "تنزانيي"
            ],
            [
                "code" => "TH",
                "country_en" => " Thailand",
                "country_ar" => "تايلندا",
                "name_en" => "Thai",
                "name_ar" => "تايلندي"
            ],
            [
                "code" => "TL",
                "country_en" => " Timor-Leste",
                "country_ar" => "تيمور الشرقية",
                "name_en" => "Timor-Lestian",
                "name_ar" => "تيموري"
            ],
            [
                "code" => "TG",
                "country_en" => " Togo",
                "country_ar" => "توغو",
                "name_en" => "Togolese",
                "name_ar" => "توغي"
            ],
            [
                "code" => "TK",
                "country_en" => " Tokelau",
                "country_ar" => "توكيلاو",
                "name_en" => "Tokelaian",
                "name_ar" => "توكيلاوي"
            ],
            [
                "code" => "TO",
                "country_en" => " Tonga",
                "country_ar" => "تونغا",
                "name_en" => "Tongan",
                "name_ar" => "تونغي"
            ],
            [
                "code" => "TT",
                "country_en" => " Trinidad and Tobago",
                "country_ar" => "ترينيداد وتوباغو",
                "name_en" => "Trinidadian/Tobagonian",
                "name_ar" => "ترينيداد وتوباغو"
            ],
            [
                "code" => "TN",
                "country_en" => " Tunisia",
                "country_ar" => "تونس",
                "name_en" => "Tunisian",
                "name_ar" => "تونسي"
            ],
            [
                "code" => "TR",
                "country_en" => " Turkey",
                "country_ar" => "تركيا",
                "name_en" => "Turkish",
                "name_ar" => "تركي"
            ],
            [
                "code" => "TM",
                "country_en" => " Turkmenistan",
                "country_ar" => "تركمانستان",
                "name_en" => "Turkmen",
                "name_ar" => "تركمانستاني"
            ],
            [
                "code" => "TC",
                "country_en" => " Turks and Caicos Islands",
                "country_ar" => "جزر توركس وكايكوس",
                "name_en" => "Turks and Caicos Islands",
                "name_ar" => "جزر توركس وكايكوس"
            ],
            [
                "code" => "TV",
                "country_en" => " Tuvalu",
                "country_ar" => "توفالو",
                "name_en" => "Tuvaluan",
                "name_ar" => "توفالي"
            ],
            [
                "code" => "UG",
                "country_en" => " Uganda",
                "country_ar" => "أوغندا",
                "name_en" => "Ugandan",
                "name_ar" => "أوغندي"
            ],
            [
                "code" => "UA",
                "country_en" => " Ukraine",
                "country_ar" => "أوكرانيا",
                "name_en" => "Ukrainian",
                "name_ar" => "أوكراني"
            ],
            [
                "code" => "AE",
                "country_en" => " United Arab Emirates",
                "country_ar" => "الإمارات العربية المتحدة",
                "name_en" => "Emirati",
                "name_ar" => "إماراتي"
            ],
            [
                "code" => "GB",
                "country_en" => " United Kingdom",
                "country_ar" => "المملكة المتحدة",
                "name_en" => "British",
                "name_ar" => "بريطاني"
            ],
            [
                "code" => "US",
                "country_en" => " United States",
                "country_ar" => "الولايات المتحدة",
                "name_en" => "American",
                "name_ar" => "أمريكي"
            ],
            [
                "code" => "UM",
                "country_en" => " US Minor Outlying Islands",
                "country_ar" => "قائمة الولايات والمناطق الأمريكية",
                "name_en" => "US Minor Outlying Islander",
                "name_ar" => "أمريكي"
            ],
            [
                "code" => "UY",
                "country_en" => " Uruguay",
                "country_ar" => "أورغواي",
                "name_en" => "Uruguayan",
                "name_ar" => "أورغواي"
            ],
            [
                "code" => "UZ",
                "country_en" => " Uzbekistan",
                "country_ar" => "أوزباكستان",
                "name_en" => "Uzbek",
                "name_ar" => "أوزباكستاني"
            ],
            [
                "code" => "VU",
                "country_en" => " Vanuatu",
                "country_ar" => "فانواتو",
                "name_en" => "Vanuatuan",
                "name_ar" => "فانواتي"
            ],
            [
                "code" => "VE",
                "country_en" => " Venezuela",
                "country_ar" => "فنزويلا",
                "name_en" => "Venezuelan",
                "name_ar" => "فنزويلي"
            ],
            [
                "code" => "VN",
                "country_en" => " Vietnam",
                "country_ar" => "فيتنام",
                "name_en" => "Vietnamese",
                "name_ar" => "فيتنامي"
            ],
            [
                "code" => "VI",
                "country_en" => " Virgin Islands (U.S.)",
                "country_ar" => "الجزر العذراء الأمريكي",
                "name_en" => "American Virgin Islander",
                "name_ar" => "أمريكي"
            ],
            [
                "code" => "VA",
                "country_en" => " Vatican City",
                "country_ar" => "فنزويلا",
                "name_en" => "Vatican",
                "name_ar" => "فاتيكاني"
            ],
            [
                "code" => "WF",
                "country_en" => " Wallis and Futuna Islands",
                "country_ar" => "والس وفوتونا",
                "name_en" => "Wallisian/Futunan",
                "name_ar" => "فوتوني"
            ],
            [
                "code" => "EH",
                "country_en" => " Western Sahara",
                "country_ar" => "الصحراء الغربية",
                "name_en" => "Sahrawian",
                "name_ar" => "صحراوي"
            ],
            [
                "code" => "YE",
                "country_en" => " Yemen",
                "country_ar" => "اليمن",
                "name_en" => "Yemeni",
                "name_ar" => "يمني"
            ],
            [
                "code" => "ZM",
                "country_en" => " Zambia",
                "country_ar" => "زامبيا",
                "name_en" => "Zambian",
                "name_ar" => "زامبياني"
            ],
            [
                "code" => "ZW",
                "country_en" => " Zimbabwe",
                "country_ar" => "زمبابوي",
                "name_en" => "Zimbabwean",
                "name_ar" => "زمبابوي"
            ]
        ];



        foreach ($arr as $nat) {
            PublicNationality::create([
                'code' => $nat['code'],
                'name_en' => $nat['name_en'],
                'name_ar' => $nat['name_ar']
            ]);
        }
    }
}
