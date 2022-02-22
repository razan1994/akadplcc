<?php

namespace Database\Seeders;

use App\Models\DoctorSpeciality;
use App\Models\SubSpeciality;
use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $array = [
            [
                "id" => 1,
                "name_en" => "جلدية و تناسلية",
                "name_ar" => " Dermatology ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 2,
                "name_en" => "جلدية كبار",
                "name_ar" => "Adult Dermatology",
                "type" => "sub",
                "main_id" => 1
            ],
            [
                "id" => 3,
                "name_en" => "امراض الاطفال الجلدية",
                "name_ar" => "Pediatric Dermatology",
                "type" => "sub",
                "main_id" => 1
            ],
            [
                "id" => 4,
                "name_en" => "الجلدية التجميلية والليزر",
                "name_ar" => "Cosmetic Dermatology and Laser",
                "type" => "sub",
                "main_id" => 1
            ],
            [
                "id" => 5,
                "name_en" => "متابعة الامراض الجلدية",
                "name_ar" => "Dermatology Follow Up",
                "type" => "sub",
                "main_id" => 1
            ],
            [
                "id" => 6,
                "name_en" => "الأمراض الجلدية التناسلية",
                "name_ar" => "Genital Dermatology",
                "type" => "sub",
                "main_id" => 1
            ],
            [
                "id" => 7,
                "name_en" => "حساسية الجلد",
                "name_ar" => "Skin Allergy",
                "type" => "sub",
                "main_id" => 1
            ],
            [
                "id" => 8,
                "name_en" => "اسنان",
                "name_ar" => " Dentistry ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 9,
                "name_en" => "جراحة الوجه والفكين",
                "name_ar" => "Oral and Maxillofacial Surgery",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 10,
                "name_en" => "تقويم الأسنان",
                "name_ar" => "orthodontics",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 11,
                "name_en" => "طب اسنان اطفال",
                "name_ar" => "Pediatric Dentistry",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 12,
                "name_en" => "طب الأسنان التجميلي",
                "name_ar" => "Cosmetic Dentistry",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 13,
                "name_en" => "حشو وعلاج الجذور والاعصاب",
                "name_ar" => "Filling and treatment of roots and nerves",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 14,
                "name_en" => "اشعة الاسنان",
                "name_ar" => "dental x-rays",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 15,
                "name_en" => "أمراض الفم",
                "name_ar" => "Oral diseases",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 16,
                "name_en" => "علاج اللثة",
                "name_ar" => "gum treatment",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 17,
                "name_en" => "طب أسنان الكبار",
                "name_ar" => "Adult Dentistry ",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 18,
                "name_en" => "طب أسنان كبار السن",
                "name_ar" => "Elder Dentistry",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 19,
                "name_en" => "تجميل الأسنان بالليزر",
                "name_ar" => "Cosmetic Dentistry By Laser",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 20,
                "name_en" => "طب الأسنان الوقائي",
                "name_ar" => "Preventive Dentistry",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 21,
                "name_en" => "تركيبات اسنان",
                "name_ar" => "dental implants",
                "type" => "sub",
                "main_id" => 8
            ],
            [
                "id" => 22,
                "name_en" => "أورام",
                "name_ar" => "Oncology (Tumor)",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 23,
                "name_en" => "الاشعة العلاجية",
                "name_ar" => "therapeutic radiology",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 24,
                "name_en" => "اورام كبار",
                "name_ar" => "Adult Oncology",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 25,
                "name_en" => "اورام اطفال",
                "name_ar" => "Pediatric Oncology",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 26,
                "name_en" => "علاج اورام بالإشعاع",
                "name_ar" => "Radiation Oncology",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 27,
                "name_en" => "جراحة اورام المخ",
                "name_ar" => "brain tumor surgery",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 28,
                "name_en" => "جراحة اورام القولون",
                "name_ar" => "Colon tumor surgery",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 29,
                "name_en" => "جراحة اورام الكبد",
                "name_ar" => "Liver tumor surgery",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 30,
                "name_en" => "جراحة اورام الرئة",
                "name_ar" => "Lung tumor surgery",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 31,
                "name_en" => "جراحة اورام العظام",
                "name_ar" => "Orthopedic surgery",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 32,
                "name_en" => "جراحة اورام البروستاتا",
                "name_ar" => "Prostate tumor surgery",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 33,
                "name_en" => "جراحة اورام كبار",
                "name_ar" => "Adult Oncology Surgery",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 34,
                "name_en" => "أمراض الدم",
                "name_ar" => "Hematology ",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 35,
                "name_en" => "جراحة اورام المعدة",
                "name_ar" => "stomach tumor surgery",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 36,
                "name_en" => "جراحة المخ",
                "name_ar" => "Neurosurgery",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 37,
                "name_en" => "طب جراحة العمود الفقري والعناية الحرجة",
                "name_ar" => "Medicine Spine Surgery Critical Care",
                "type" => "sub",
                "main_id" => 22
            ],
            [
                "id" => 38,
                "name_en" => "باطني",
                "name_ar" => "Internal Medicine ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 39,
                "name_en" => "امراض سارية و معدية",
                "name_ar" => "Communicable and contagious diseases",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 40,
                "name_en" => "باطني كبار",
                "name_ar" => "Adult Internal Medicine",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 41,
                "name_en" => "باطني اطفال",
                "name_ar" => "Pediatric Internal Medicine",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 42,
                "name_en" => "امراض الكلى",
                "name_ar" => "Nephrology ",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 43,
                "name_en" => "امراض الكلى بالغين",
                "name_ar" => "Adult Nephrology ",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 44,
                "name_en" => "جهاز هضمي وتنظير",
                "name_ar" => "Gastroenterology and Endoscopy",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 45,
                "name_en" => "الطب الباطني",
                "name_ar" => "Internal Medicine",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 46,
                "name_en" => "جهاز هضمي وتنظير بالغين",
                "name_ar" => " Adult Gastroenterology and Endoscopy",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 47,
                "name_en" => "الطب الباطني للبالغين",
                "name_ar" => "Adult Internal Medicine",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 48,
                "name_en" => "الطب الباطني",
                "name_ar" => "Internal Medicine",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 49,
                "name_en" => "أمراض الرئة",
                "name_ar" => "Pulmonology ",
                "type" => "sub",
                "main_id" => 38
            ],
            [
                "id" => 50,
                "name_en" => "جراحة أطفال",
                "name_ar" => " Pediatric Surgery ",
                "type" => "sub",
                "main_id" => null
            ],
            [
                "id" => 51,
                "name_en" => "جراحة قلب الأطفال",
                "name_ar" => "Pediatric Heart Surgery",
                "type" => "sub",
                "main_id" => 50
            ],
            [
                "id" => 52,
                "name_en" => "جراحة عامة اطفال",
                "name_ar" => "Pediatric general surgery",
                "type" => "sub",
                "main_id" => 50
            ],
            [
                "id" => 53,
                "name_en" => "جراحة تشوهات اطفال وعيوب خلقية",
                "name_ar" => "Pediatric malformations and birth defects surgery",
                "type" => "sub",
                "main_id" => 50
            ],
            [
                "id" => 54,
                "name_en" => "جراحة اورام اطفال",
                "name_ar" => "Pediatric oncology surgery",
                "type" => "sub",
                "main_id" => 50
            ],
            [
                "id" => 55,
                "name_en" => "جراحة انف و اذن و حنجرة اطفال",
                "name_ar" => "Pediatric Ear Nose and throat Surgery",
                "type" => "sub",
                "main_id" => 50
            ],
            [
                "id" => 56,
                "name_en" => "جراحة أعصاب الأطفال",
                "name_ar" => "Pediatric Neurosurgery",
                "type" => "sub",
                "main_id" => 50
            ],
            [
                "id" => 57,
                "name_en" => "جراحة الأوعية الدموية للأطفال",
                "name_ar" => "Pediatric Vascular Surgery",
                "type" => "sub",
                "main_id" => 50
            ],
            [
                "id" => 58,
                "name_en" => "جراحة جهاز هضمي وتنظير اطفال",
                "name_ar" => "Pediatric gastrointestinal surgery and endoscopy",
                "type" => "sub",
                "main_id" => 50
            ],
            [
                "id" => 59,
                "name_en" => "جراحة مسالك بولية ",
                "name_ar" => "Pediatric Urology Surgery",
                "type" => "sub",
                "main_id" => 50
            ],
            [
                "id" => 60,
                "name_en" => "جراحة تشوهات الأطفال والعيوب الخلقية",
                "name_ar" => "Pediatric Deformities and Birth Defects Surgery",
                "type" => "sub",
                "main_id" => 50
            ],
            [
                "id" => 61,
                "name_en" => "جراحة أوعية دموية",
                "name_ar" => "Vascular Surgery (Arteries and Vein Surgery)",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 62,
                "name_en" => "جراحة اوعية دموية كبار",
                "name_ar" => "Adult Vascular Surgery",
                "type" => "sub",
                "main_id" => 61
            ],
            [
                "id" => 63,
                "name_en" => "جراحة اوعية دموية اطفال",
                "name_ar" => "Pediatric Vascular Surgery",
                "type" => "sub",
                "main_id" => 61
            ],
            [
                "id" => 64,
                "name_en" => "علاج قدم سكري",
                "name_ar" => "diabetic foot treatment",
                "type" => "sub",
                "main_id" => 61
            ],
            [
                "id" => 65,
                "name_en" => "علاج دوالي الساق",
                "name_ar" => "Varicose veins treatment",
                "type" => "sub",
                "main_id" => 61
            ],
            [
                "id" => 66,
                "name_en" => "جراحة عامة",
                "name_ar" => "General Surgery ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 67,
                "name_en" => "جراحة المنظار",
                "name_ar" => "Endoscopic Surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 68,
                "name_en" => "جراحة اورام الثدي",
                "name_ar" => "Breast tumor surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 69,
                "name_en" => "جراحة عامة كبار",
                "name_ar" => "Adult General Surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 70,
                "name_en" => "جراحة عامة للاطفال",
                "name_ar" => "Pediatric General Surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 71,
                "name_en" => "جراحة بطن",
                "name_ar" => "Abdominal surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 72,
                "name_en" => "جراحة غدد صماء",
                "name_ar" => "Endocrine surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 73,
                "name_en" => "جراحة جهاز هضمي و تنظير كبار",
                "name_ar" => "Adult Gastrointestinal and Endoscopic Surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 74,
                "name_en" => "جراحة اصابات وحوادث",
                "name_ar" => "Trauma and accident surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 75,
                "name_en" => "جراحة البطن",
                "name_ar" => "Abdominal Surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 76,
                "name_en" => "جراحة الغدد الصماء ",
                "name_ar" => "Endocrinal Surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 77,
                "name_en" => "جراحة القولون والشرج",
                "name_ar" => "Colon and Anal surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 78,
                "name_en" => "جراحة السمنة والمناظير",
                "name_ar" => "Obesity and Laparoscopic Surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 79,
                "name_en" => "ورم الثدي",
                "name_ar" => "Breast Tumor",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 80,
                "name_en" => "جراحة السمنة",
                "name_ar" => " Obesity Surgery",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 81,
                "name_en" => "جراحة الحوادث و الرضوض",
                "name_ar" => "Trauma and Accident Surgery Adult ",
                "type" => "sub",
                "main_id" => 66
            ],
            [
                "id" => 82,
                "name_en" => "جراحة عمود فقري",
                "name_ar" => "Spinal Surgery ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 83,
                "name_en" => "جراحة عمود فقري كبار",
                "name_ar" => "Adult ",
                "type" => "sub",
                "main_id" => 82
            ],
            [
                "id" => 84,
                "name_en" => "جراحة دمج الفقرات",
                "name_ar" => "Spinal fusion surgery",
                "type" => "sub",
                "main_id" => 82
            ],
            [
                "id" => 85,
                "name_en" => "جراحة تضيق العمود الفقري",
                "name_ar" => "Spinal stenosis surgery",
                "type" => "sub",
                "main_id" => 82
            ],
            [
                "id" => 86,
                "name_en" => "جراحة عمود فقري صغار",
                "name_ar" => "Pediatric",
                "type" => "sub",
                "main_id" => 82
            ],
            [
                "id" => 87,
                "name_en" => "جراحة الاعصاب",
                "name_ar" => "Neurosurgery",
                "type" => "sub",
                "main_id" => 82
            ],
            [
                "id" => 88,
                "name_en" => "جهاز هضمي وتنظير",
                "name_ar" => " Gastroenterology and Endoscopy ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 89,
                "name_en" => "جهاز هضمي وتنظير كبار",
                "name_ar" => "Adult Gastroenterology and Endoscopy",
                "type" => "sub",
                "main_id" => 88
            ],
            [
                "id" => 90,
                "name_en" => "جهاز هضمي وتنظير صغار",
                "name_ar" => "Pediatric Gastroenterology and Endoscopy",
                "type" => "sub",
                "main_id" => 88
            ],
            [
                "id" => 91,
                "name_en" => "حساسية ومناعة",
                "name_ar" => "Allergy and immunity",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 92,
                "name_en" => "حساسية ومناعة كبار",
                "name_ar" => "Adult Allergy and Immunology",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 93,
                "name_en" => "حساسية ومناعة صغار",
                "name_ar" => "Pediatric Allergy and Immunology",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 94,
                "name_en" => "حساسية الجهاز التنفسي",
                "name_ar" => "Respiratory Tract Allergy",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 95,
                "name_en" => "حساسية المناعة الذاتية",
                "name_ar" => "Autoimmune Allergy",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 96,
                "name_en" => "حساسية الجلد",
                "name_ar" => "Nutrition allergy",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 97,
                "name_en" => "متابعة الحساسية",
                "name_ar" => "Allergy Follow Up",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 98,
                "name_en" => "اختبار الحساسية",
                "name_ar" => "Allergy testing",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 99,
                "name_en" => "وصفات أدوية الحساسية",
                "name_ar" => "Allergy Medication Prescriptions",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 100,
                "name_en" => "العلاج المناعي لعلاج الحساسية",
                "name_ar" => "Immunotherapy for Treatment of Allergy",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 101,
                "name_en" => "حساسية الصدر",
                "name_ar" => "Chest Allergy",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 102,
                "name_en" => " حساسية الدواء",
                "name_ar" => "Medicine Allergy",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 103,
                "name_en" => "حساسية التغذية",
                "name_ar" => "Nutrition Allergy",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 104,
                "name_en" => "حساسية العيون",
                "name_ar" => "Eye Allergy",
                "type" => "sub",
                "main_id" => 91
            ],
            [
                "id" => 105,
                "name_en" => "نسائية وتوليد",
                "name_ar" => "Obstetrics and Gynecology",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 106,
                "name_en" => "أمراض النساء",
                "name_ar" => " Gynecology ",
                "type" => "sub",
                "main_id" => 105
            ],
            [
                "id" => 107,
                "name_en" => "سلس البول",
                "name_ar" => "Urinary Incontinence",
                "type" => "sub",
                "main_id" => 105
            ],
            [
                "id" => 108,
                "name_en" => "جراحة الأورام النسائية",
                "name_ar" => "Gynaecologic Oncological Surgery",
                "type" => "sub",
                "main_id" => 105
            ],
            [
                "id" => 109,
                "name_en" => "طب الأورام النسائية",
                "name_ar" => "Gynaecologic Oncological ",
                "type" => "sub",
                "main_id" => 105
            ],
            [
                "id" => 110,
                "name_en" => "حقن مجهري وأطفال أنابيب",
                "name_ar" => "IVF and Infertility ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 111,
                "name_en" => "أمراض النساء والعقم",
                "name_ar" => "Gynecology and Infertility ",
                "type" => "sub",
                "main_id" => 110
            ],
            [
                "id" => 112,
                "name_en" => "اطفال انابيب",
                "name_ar" => "IVF ",
                "type" => "sub",
                "main_id" => 110
            ],
            [
                "id" => 113,
                "name_en" => "جراحة عقم النساء",
                "name_ar" => "Surgery Female Infertility",
                "type" => "sub",
                "main_id" => 110
            ],
            [
                "id" => 114,
                "name_en" => "أطفال الأنابيب والعقم",
                "name_ar" => "IVF and Infertility",
                "type" => "sub",
                "main_id" => 110
            ],
            [
                "id" => 115,
                "name_en" => "عقم النساء",
                "name_ar" => "Female Infertility",
                "type" => "sub",
                "main_id" => 110
            ],
            [
                "id" => 116,
                "name_en" => "ذكورة وعقم",
                "name_ar" => " Andrology and Male Infertility ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 117,
                "name_en" => "امراض ذكورة",
                "name_ar" => "Andrology Diseases",
                "type" => "sub",
                "main_id" => 116
            ],
            [
                "id" => 118,
                "name_en" => "عقم ذكور",
                "name_ar" => "male infertility",
                "type" => "sub",
                "main_id" => 116
            ],
            [
                "id" => 119,
                "name_en" => "دوالي الخصية",
                "name_ar" => "Varicocele",
                "type" => "sub",
                "main_id" => 116
            ],
            [
                "id" => 120,
                "name_en" => "دعامة الانتصاب",
                "name_ar" => "erection prop",
                "type" => "sub",
                "main_id" => 116
            ],
            [
                "id" => 121,
                "name_en" => "أمراض الذكورة والعقم عند الذكور",
                "name_ar" => "Andrology and Male Infertility",
                "type" => "sub",
                "main_id" => 116
            ],
            [
                "id" => 122,
                "name_en" => "جراحة المسالك البولية للبالغين",
                "name_ar" => "Adult Urology",
                "type" => "sub",
                "main_id" => 116
            ],
            [
                "id" => 123,
                "name_en" => "جراحة المسالك البولية لدى الأطفال",
                "name_ar" => "Pediatric Urology",
                "type" => "sub",
                "main_id" => 116
            ],
            [
                "id" => 124,
                "name_en" => "الذكورة",
                "name_ar" => "Andrology",
                "type" => "sub",
                "main_id" => 116
            ],
            [
                "id" => 125,
                "name_en" => "جراحة المسالك البولية",
                "name_ar" => "Urology",
                "type" => "sub",
                "main_id" => 116
            ],
            [
                "id" => 126,
                "name_en" => "جراحة الكلى الكبار",
                "name_ar" => "Adult Kidney Surgery",
                "type" => "sub",
                "main_id" => 116
            ],
            [
                "id" => 127,
                "name_en" => "روماتيزم ومفاصل",
                "name_ar" => "rheumatism",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 128,
                "name_en" => "طب القلب",
                "name_ar" => "Cardiology",
                "type" => "sub",
                "main_id" => 127
            ],
            [
                "id" => 129,
                "name_en" => "روماتيزم كبار",
                "name_ar" => "Adult rheumatism",
                "type" => "sub",
                "main_id" => 127
            ],
            [
                "id" => 130,
                "name_en" => "أمراض القلب للبالغين",
                "name_ar" => "Adult Cardiology",
                "type" => "sub",
                "main_id" => 127
            ],
            [
                "id" => 131,
                "name_en" => "روماتيزم صغار",
                "name_ar" => "Pediatric rheumatism",
                "type" => "sub",
                "main_id" => 127
            ],
            [
                "id" => 132,
                "name_en" => "أمراض الأوعية الدموية عند البالغين",
                "name_ar" => "Adult Vascular Diseases",
                "type" => "sub",
                "main_id" => 127
            ],
            [
                "id" => 133,
                "name_en" => "الطب الباطني",
                "name_ar" => "Internal Medicine",
                "type" => "sub",
                "main_id" => 127
            ],
            [
                "id" => 134,
                "name_en" => "الطب الباطني للبالغين",
                "name_ar" => "Adult Internal Medicine",
                "type" => "sub",
                "main_id" => 127
            ],
            [
                "id" => 135,
                "name_en" => "طب الغدد الصماء",
                "name_ar" => "Endocrinology",
                "type" => "sub",
                "main_id" => 127
            ],
            [
                "id" => 136,
                "name_en" => "سكر وغدد صماء",
                "name_ar" => "Diabetes and Endocrinology ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 137,
                "name_en" => "سكر وغدد صماء اطفال",
                "name_ar" => "Pediatric Diabetes and Endocrinology",
                "type" => "sub",
                "main_id" => 136
            ],
            [
                "id" => 138,
                "name_en" => "سكر وغدد صماء كبار",
                "name_ar" => "Adult Diabetes and Endocrinology",
                "type" => "sub",
                "main_id" => 136
            ],
            [
                "id" => 139,
                "name_en" => "طب الغدد الصماء",
                "name_ar" => "Endocrinology",
                "type" => "sub",
                "main_id" => 136
            ],
            [
                "id" => 140,
                "name_en" => "السكري والغدد الصماء",
                "name_ar" => "Diabetes and Endocrinology",
                "type" => "sub",
                "main_id" => 136
            ],
            [
                "id" => 141,
                "name_en" => "سمعيات ",
                "name_ar" => "Audiology ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 142,
                "name_en" => "تغذية وحمية",
                "name_ar" => "Dietitian and Nutrition ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 143,
                "name_en" => "تغذية كبار",
                "name_ar" => "Adult Dietitian and Nutrition",
                "type" => "sub",
                "main_id" => 142
            ],
            [
                "id" => 144,
                "name_en" => "تغذية اطفال",
                "name_ar" => "Pediatric  Dietitian and Nutrition",
                "type" => "sub",
                "main_id" => 142
            ],
            [
                "id" => 145,
                "name_en" => "صدر وجهاز تنفسي",
                "name_ar" => "Chest and Respiratory ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 146,
                "name_en" => "صدرية و جهاز تنفسي اطفال",
                "name_ar" => "Pediatric  Chest and Respiratory",
                "type" => "sub",
                "main_id" => 145
            ],
            [
                "id" => 147,
                "name_en" => "صدرية و جهاز تنفسي كبار",
                "name_ar" => "Adult Chest and Respiratory",
                "type" => "sub",
                "main_id" => 145
            ],
            [
                "id" => 148,
                "name_en" => "طب الاسرة",
                "name_ar" => "Family Medicine ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 149,
                "name_en" => "الممارسة العامة",
                "name_ar" => "General Practice",
                "type" => "sub",
                "main_id" => 148
            ],
            [
                "id" => 150,
                "name_en" => "طب الأسرة",
                "name_ar" => "Family Medicine",
                "type" => "sub",
                "main_id" => 148
            ],
            [
                "id" => 151,
                "name_en" => "طب الأطفال العام",
                "name_ar" => "Pediatric General Practice",
                "type" => "sub",
                "main_id" => 148
            ],
            [
                "id" => 152,
                "name_en" => "طب الطوارئ و الحوادث ",
                "name_ar" => "Emergency and Accidents Medicine ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 153,
                "name_en" => "علاج طبيعي واصابات ملاعب",
                "name_ar" => "Physiotherapy and sports injuries",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 154,
                "name_en" => "كبار ",
                "name_ar" => "Adult Physiotherapy and sports injuries",
                "type" => "sub",
                "main_id" => 153
            ],
            [
                "id" => 155,
                "name_en" => "صغار",
                "name_ar" => " Pediatric Physiotherapy and sports injuries",
                "type" => "sub",
                "main_id" => 153
            ],
            [
                "id" => 156,
                "name_en" => "اصابات رياضية",
                "name_ar" => "sports injuries",
                "type" => "sub",
                "main_id" => 153
            ],
            [
                "id" => 157,
                "name_en" => "إدارة الألم",
                "name_ar" => "Pain Management",
                "type" => "sub",
                "main_id" => 153
            ],
            [
                "id" => 158,
                "name_en" => "عيون",
                "name_ar" => " Ophthalmology (Eyes)",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 159,
                "name_en" => "عيون أطفال",
                "name_ar" => " Pediatric Ophthalmology",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 160,
                "name_en" => "عيون كبار",
                "name_ar" => "Adult Ophthalmology",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 161,
                "name_en" => "ليزك وتصحيح الابصار",
                "name_ar" => "Lasik and vision correction",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 162,
                "name_en" => "جراحة شبكية وجسم زجاجي",
                "name_ar" => "Retinal and vitreous surgery",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 163,
                "name_en" => "تاهيل بصري",
                "name_ar" => "visual rehabilitation",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 164,
                "name_en" => "المياه البيضاء",
                "name_ar" => "eye white water",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 165,
                "name_en" => "زراعة القرنية",
                "name_ar" => "corneal transplant",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 166,
                "name_en" => "علاج الشبكية بالليزر",
                "name_ar" => "Retinal laser treatment",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 167,
                "name_en" => "حول",
                "name_ar" => "eye disease",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 168,
                "name_en" => "جراحة الشبكية",
                "name_ar" => "Vitreous Body and Retinal Surgery",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 169,
                "name_en" => "الحول",
                "name_ar" => "Strabismus",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 170,
                "name_en" => "زرع قرنية",
                "name_ar" => "CorniaTrsnplant",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 171,
                "name_en" => "علاج الشبكية بالليزر",
                "name_ar" => "Retinal Laser Treatment",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 172,
                "name_en" => "إعتمام عدسة العين",
                "name_ar" => "Cataract",
                "type" => "sub",
                "main_id" => 158
            ],
            [
                "id" => 173,
                "name_en" => "كبد",
                "name_ar" => "Hepatology (Liver Doctor)",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 174,
                "name_en" => "كبد كبار",
                "name_ar" => "Adult Hepatology",
                "type" => "sub",
                "main_id" => 173
            ],
            [
                "id" => 175,
                "name_en" => "كبد صغار",
                "name_ar" => " Pediatric Hepatology",
                "type" => "sub",
                "main_id" => 173
            ],
            [
                "id" => 176,
                "name_en" => "زراعة كبد",
                "name_ar" => "Liver transplant",
                "type" => "sub",
                "main_id" => 173
            ],
            [
                "id" => 177,
                "name_en" => "كلى",
                "name_ar" => "Nephrology ",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 178,
                "name_en" => "كلى اطفال",
                "name_ar" => "Pediatric Nephrology ",
                "type" => "sub",
                "main_id" => 177
            ],
            [
                "id" => 179,
                "name_en" => "كلى كبار",
                "name_ar" => "Adult Nephrology ",
                "type" => "sub",
                "main_id" => 177
            ],
            [
                "id" => 180,
                "name_en" => "زراعة كلى",
                "name_ar" => "Kidney transplant",
                "type" => "sub",
                "main_id" => 177
            ],
            [
                "id" => 181,
                "name_en" => "دوالي",
                "name_ar" => "Varicocele",
                "type" => "sub",
                "main_id" => 177
            ],
            [
                "id" => 182,
                "name_en" => "مسالك بولية",
                "name_ar" => "Urology (Urinary System)",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 183,
                "name_en" => "مسالك بولية كبار",
                "name_ar" => "Adult Urology",
                "type" => "sub",
                "main_id" => 182
            ],
            [
                "id" => 184,
                "name_en" => "متابعة جراحة المسالك البولية",
                "name_ar" => "Urology Follow Up",
                "type" => "sub",
                "main_id" => 182
            ],
            [
                "id" => 185,
                "name_en" => "مسالك بولية اطفال",
                "name_ar" => "Pediatric Neurology",
                "type" => "sub",
                "main_id" => 182
            ],
            [
                "id" => 186,
                "name_en" => "أشعة",
                "name_ar" => "rays",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 187,
                "name_en" => "الأشعة التداخلية",
                "name_ar" => "Interventional Radiology",
                "type" => "sub",
                "main_id" => 186
            ],
            [
                "id" => 188,
                "name_en" => "الاشعة التشخيصية",
                "name_ar" => "diagnostic radiology",
                "type" => "sub",
                "main_id" => 186
            ],
            [
                "id" => 189,
                "name_en" => "أطفال وحديثي الولادة",
                "name_ar" => "Babies and newborns",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 190,
                "name_en" => "حديثي الولادة",
                "name_ar" => "new born",
                "type" => "sub",
                "main_id" => 189
            ],
            [
                "id" => 191,
                "name_en" => "اطفال",
                "name_ar" => "Pediatric",
                "type" => "sub",
                "main_id" => 189
            ],
            [
                "id" => 192,
                "name_en" => "رضاعة طبيعية",
                "name_ar" => "Breast feeding",
                "type" => "sub",
                "main_id" => 189
            ],
            [
                "id" => 193,
                "name_en" => "طهور اطفال",
                "name_ar" => "purification of Pediatric ",
                "type" => "sub",
                "main_id" => 189
            ],
            [
                "id" => 194,
                "name_en" => "جراحة التجميل",
                "name_ar" => "plastic surgery",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 195,
                "name_en" => "جراحة تجميل الوجه",
                "name_ar" => "Facial plastic surgery",
                "type" => "sub",
                "main_id" => 194
            ],
            [
                "id" => 196,
                "name_en" => "جراحة تجميل الحروق",
                "name_ar" => "Burn plastic surgery",
                "type" => "sub",
                "main_id" => 194
            ],
            [
                "id" => 197,
                "name_en" => "جراحة تجميل العيون",
                "name_ar" => "Eye plastic surgery",
                "type" => "sub",
                "main_id" => 194
            ],
            [
                "id" => 198,
                "name_en" => "جراحة تجميل اليد",
                "name_ar" => "hand plastic surgery",
                "type" => "sub",
                "main_id" => 194
            ],
            [
                "id" => 199,
                "name_en" => "جراحة تجميل الانف",
                "name_ar" => "rhinoplasty surgery",
                "type" => "sub",
                "main_id" => 194
            ],
            [
                "id" => 200,
                "name_en" => "جراحة تجميل الثدي",
                "name_ar" => "Breast plastic surgery",
                "type" => "sub",
                "main_id" => 194
            ],
            [
                "id" => 201,
                "name_en" => "الجراحة التجميلية للمهبل مع اعادة الجسم الصلب",
                "name_ar" => "Vaginal plastic surgery with hard body restoration",
                "type" => "sub",
                "main_id" => 194
            ],
            [
                "id" => 202,
                "name_en" => "نطق و تخاطب ",
                "name_ar" => "Phoniatrics (Speech)",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 203,
                "name_en" => "أمراض الدم",
                "name_ar" => "Blood diseases",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 204,
                "name_en" => "امراض دم اطفال",
                "name_ar" => "Pediatric hematology",
                "type" => "sub",
                "main_id" => 203
            ],
            [
                "id" => 205,
                "name_en" => "امراض دم كبار",
                "name_ar" => "Adult  blood diseases",
                "type" => "sub",
                "main_id" => 203
            ],
            [
                "id" => 206,
                "name_en" => "زرع خلايا جذعية",
                "name_ar" => "stem cell transplant",
                "type" => "sub",
                "main_id" => 203
            ],
            [
                "id" => 207,
                "name_en" => "أنف وأذن وحنجرة",
                "name_ar" => "Ear, Nose and Throat",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 208,
                "name_en" => "جراحة الوجه والرقبة",
                "name_ar" => "Face and neck surgery",
                "type" => "sub",
                "main_id" => 207
            ],
            [
                "id" => 209,
                "name_en" => "انف واذن وحنجرة كبار",
                "name_ar" => "Adult  ear, nose and throat",
                "type" => "sub",
                "main_id" => 207
            ],
            [
                "id" => 210,
                "name_en" => "انف و اذن و حنجرة اطفال",
                "name_ar" => "Pediatric ear, nose and throat",
                "type" => "sub",
                "main_id" => 207
            ],
            [
                "id" => 211,
                "name_en" => "اضطراب السمع و التوازن",
                "name_ar" => "Hearing and balance disorder",
                "type" => "sub",
                "main_id" => 207
            ],
            [
                "id" => 212,
                "name_en" => "جراحة انف و اذن و حنجرة كبار",
                "name_ar" => "Adult Ear, Nose and Throat Surgery",
                "type" => "sub",
                "main_id" => 207
            ],
            [
                "id" => 213,
                "name_en" => "جراحة انف و اذن و حنجرة اطفال",
                "name_ar" => "Pediatric ear, nose and throat surgery",
                "type" => "sub",
                "main_id" => 207
            ],
            [
                "id" => 214,
                "name_en" => "جراحة الدماغ و الأعصاب",
                "name_ar" => "Brain and Neurosurgery",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 215,
                "name_en" => "جراحة دماغ و اعصاب كبار",
                "name_ar" => "Adult  brain and neurosurgery",
                "type" => "sub",
                "main_id" => 214
            ],
            [
                "id" => 216,
                "name_en" => "جراحة دماغ و اعصاب اطفال",
                "name_ar" => "Pediatric brain and neurosurgery",
                "type" => "sub",
                "main_id" => 214
            ],
            [
                "id" => 217,
                "name_en" => "جراحة القلب",
                "name_ar" => "Heart Surgery",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 218,
                "name_en" => "جراحة قلب كبار",
                "name_ar" => "Adult  heart surgery",
                "type" => "sub",
                "main_id" => 217
            ],
            [
                "id" => 219,
                "name_en" => "جراحة قلب اطفال",
                "name_ar" => "Pediatric heart surgery",
                "type" => "sub",
                "main_id" => 217
            ],
            [
                "id" => 220,
                "name_en" => "جراحة السمنة وتخفيف الوزن",
                "name_ar" => "Bariatric surgery and weight loss",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 221,
                "name_en" => "جراحة الصدر",
                "name_ar" => "Thoracic surgery",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 222,
                "name_en" => "جراحة صدر كبار",
                "name_ar" => "Adult thoracic surgery",
                "type" => "sub",
                "main_id" => 221
            ],
            [
                "id" => 223,
                "name_en" => "جراحة صدر اطفال",
                "name_ar" => "Pediatric chest surgery",
                "type" => "sub",
                "main_id" => 221
            ],
            [
                "id" => 224,
                "name_en" => "التخدير والعناية المركزة",
                "name_ar" => "Anesthesia and intensive care",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 225,
                "name_en" => "التربية الخاصة",
                "name_ar" => "Special Education",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 226,
                "name_en" => "العلاج الوظيفي",
                "name_ar" => "Occupational Therapy",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 227,
                "name_en" => "العناية الحرجة",
                "name_ar" => "critical care",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 228,
                "name_en" => "تجميل و ليزر",
                "name_ar" => "Cosmetic and laser",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 229,
                "name_en" => "طب عام",
                "name_ar" => "General Medicine",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 230,
                "name_en" => "طب عام كبار",
                "name_ar" => "Adult  general medicine",
                "type" => "sub",
                "main_id" => 229
            ],
            [
                "id" => 231,
                "name_en" => "طب عام صغار",
                "name_ar" => "Pediatric general medicine",
                "type" => "sub",
                "main_id" => 229
            ],
            [
                "id" => 232,
                "name_en" => "دماغ وأعصاب",
                "name_ar" => "brain and nerves",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 233,
                "name_en" => "دماغ واعصاب اطفال",
                "name_ar" => "Pediatric brain and nerves",
                "type" => "sub",
                "main_id" => 232
            ],
            [
                "id" => 234,
                "name_en" => "دماغ واعصاب كبار",
                "name_ar" => "Adult  brain and nerves",
                "type" => "sub",
                "main_id" => 232
            ],
            [
                "id" => 235,
                "name_en" => "طب نووي",
                "name_ar" => "nuclear medicine",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 236,
                "name_en" => "عظام",
                "name_ar" => "bones",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 237,
                "name_en" => "عظام كبار",
                "name_ar" => "Adult bones",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 238,
                "name_en" => "عظام اطفال",
                "name_ar" => "Pediatric bones",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 239,
                "name_en" => "جراحة عظام كبار",
                "name_ar" => "Adult  orthopedic surgery",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 240,
                "name_en" => "جراحة عظام اطفال",
                "name_ar" => "Pediatric orthopedic surgery",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 241,
                "name_en" => "تشوهات عظام",
                "name_ar" => "bone deformities",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 242,
                "name_en" => "عظام اليد والكتف",
                "name_ar" => "Hand and shoulder bones",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 243,
                "name_en" => "عظام القدم والكاحل",
                "name_ar" => "Foot and ankle bones",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 244,
                "name_en" => "تغيير المفاصل",
                "name_ar" => "change joints",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 245,
                "name_en" => "جراحة الاعصاب الطرفية",
                "name_ar" => "Peripheral nerve surgery",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 246,
                "name_en" => "تقويم عظام",
                "name_ar" => "orthotics",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 247,
                "name_en" => "اصابات ملاعب وتنظير مفاصل",
                "name_ar" => "Sports injuries and arthroscopy",
                "type" => "sub",
                "main_id" => 236
            ],
            [
                "id" => 248,
                "name_en" => "علاج الألم",
                "name_ar" => "Pain treatment",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 249,
                "name_en" => "كبار ",
                "name_ar" => "Adult ",
                "type" => "sub",
                "main_id" => 248
            ],
            [
                "id" => 250,
                "name_en" => "صغار",
                "name_ar" => "Pediatric",
                "type" => "sub",
                "main_id" => 248
            ],
            [
                "id" => 251,
                "name_en" => "قلب وشرايين",
                "name_ar" => "heart and arteries",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 252,
                "name_en" => "قلب اطفال",
                "name_ar" => "kids heart",
                "type" => "sub",
                "main_id" => 251
            ],
            [
                "id" => 253,
                "name_en" => "قلب كبار",
                "name_ar" => "Adult heart",
                "type" => "sub",
                "main_id" => 251
            ],
            [
                "id" => 254,
                "name_en" => "شرايين اطفال",
                "name_ar" => "children's arteries",
                "type" => "sub",
                "main_id" => 251
            ],
            [
                "id" => 255,
                "name_en" => "شرايين كبار",
                "name_ar" => "Adult  arteries",
                "type" => "sub",
                "main_id" => 251
            ],
            [
                "id" => 256,
                "name_en" => "نفسي",
                "name_ar" => "mental illness",
                "type" => "main",
                "main_id" => null
            ],
            [
                "id" => 257,
                "name_en" => "نفسي كبار",
                "name_ar" => "Adult  mental illness",
                "type" => "sub",
                "main_id" => 256
            ],
            [
                "id" => 258,
                "name_en" => "نفسي صغار",
                "name_ar" => "mental illness",
                "type" => "sub",
                "main_id" => 256
            ],
            [
                "id" => 259,
                "name_en" => "علاج الادمان",
                "name_ar" => "addiction cure",
                "type" => "sub",
                "main_id" => 256
            ],
            [
                "id" => 260,
                "name_en" => "علاج السموم",
                "name_ar" => "Toxin treatment",
                "type" => "sub",
                "main_id" => 256
            ],
            [
                "id" => 261,
                "name_en" => "استشارات اسرية",
                "name_ar" => "family counseling",
                "type" => "sub",
                "main_id" => 256
            ],
            [
                "id" => 262,
                "name_en" => "رعاية تطفلية",
                "name_ar" => "intrusive care",
                "type" => "main",
                "main_id" => null
            ]
        ];


        foreach ($array as $spec) {
            DoctorSpeciality::create([
                'id'=>$spec['id'],
                'name_en' => $spec['name_ar'],
                'name_ar' => $spec['name_en'],
                'alias_name_en' => str_replace(array(' ', '"', '>', '<', '#', '%', '|', '/'), '-', $spec['name_ar']),
                'alias_name_ar' => str_replace(array(' ', '"', '>', '<', '#', '%', '|', '/'), '-', $spec['name_en']),
                'updated_by' => 1,
                'type' => $spec['type'],
                'main_id' => $spec['main_id'],
            ]);
        }
    }
}
