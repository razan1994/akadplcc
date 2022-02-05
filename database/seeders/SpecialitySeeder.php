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

        $speciality = [
            [
                1,
                "جلدية و تناسلية",
                " Dermatology "
            ],
            [
                2,
                "اسنان",
                " Dentistry (Teeth)"
            ],
            [
                3,
                "أورام",
                "Oncology (Tumor)"
            ],
            [
                4,
                "باطني",
                "Internal Medicine "
            ],
            [
                5,
                "جراحة أطفال",
                " Pediatric Surgery "
            ],
            [
                6,
                "جراحة أوعية دموية",
                "Vascular Surgery (Arteries and Vein Surgery)"
            ],
            [
                7,
                "جراحة عامة",
                "General Surgery "
            ],
            [
                8,
                "جراحة عمود فقري",
                "Spinal Surgery "
            ],
            [
                9,
                "جهاز هضمي وتنظير",
                " Gastroenterology and Endoscopy "
            ],
            [
                10,
                "حساسية ومناعة",
                "Allergy and immunity"
            ],
            [
                11,
                "حقن مجهري وأطفال أنابيب",
                "IVF and Infertility "
            ],
            [
                12,
                "ذكورة وعقم",
                " Andrology and Male Infertility "
            ],
            [
                13,
                "روماتيزم ومفاصل",
                "rheumatism"
            ],
            [
                14,
                "سكر وغدد صماء",
                "Diabetes and Endocrinology "
            ],
            [
                15,
                "سمعيات ",
                "Audiology "
            ],
            [
                16,
                "تغذية وحمية",
                "Dietitian and Nutrition "
            ],
            [
                17,
                "صدر وجهاز تنفسي",
                "Chest and Respiratory "
            ],
            [
                18,
                "طب الاسرة",
                "Family Medicine "
            ],
            [
                19,
                "طب الطوارئ و الحوادث ",
                "Emergency and Accidents Medicine "
            ],
            [
                20,
                "علاج طبيعي واصابات ملاعب",
                "Physiotherapy and sports injuries"
            ],
            [
                21,
                "عيون",
                " Ophthalmology (Eyes)"
            ],
            [
                22,
                "كبد",
                "Hepatology (Liver Doctor)"
            ],
            [
                23,
                "كلى",
                "Nephrology "
            ],
            [
                24,
                "مسالك بولية",
                "Urology (Urinary System)"
            ],
            [
                25,
                "أشعة",
                "rays"
            ],
            [
                26,
                "أطفال وحديثي الولادة",
                "Babies and newborns"
            ],
            [
                27,
                "جراحة التجميل",
                "plastic surgery"
            ],
            [
                28,
                "نطق و تخاطب ",
                "Phoniatrics (Speech)"
            ],
            [
                29,
                "أمراض الدم",
                "Blood diseases"
            ],
            [
                30,
                "امراض دم اطفال",
                "Pediatric hematology"
            ],
            [
                31,
                "أنف وأذن وحنجرة",
                "Ear, Nose and Throat"
            ],
            [
                32,
                "جراحة الدماغ و الأعصاب",
                "Brain and Neurosurgery"
            ],
            [
                33,
                "جراحة القلب",
                "Heart Surgery"
            ],
            [
                34,
                "جراحة السمنة وتخفيف الوزن",
                "Bariatric surgery and weight loss"
            ],
            [
                35,
                "جراحة الصدر",
                "Thoracic surgery"
            ],
            [
                36,
                "التخدير والعناية المركزة",
                "Anesthesia and intensive care"
            ],
            [
                37,
                "التربية الخاصة",
                "Special Education"
            ],
            [
                38,
                "العلاج الوظيفي",
                "Occupational Therapy"
            ],
            [
                39,
                "العناية الحرجة",
                "critical care"
            ],
            [
                40,
                "تجميل و ليزر",
                "Cosmetic and laser"
            ],
            [
                41,
                "طب عام",
                "General Medicine"
            ],
            [
                42,
                "دماغ وأعصاب",
                "brain and nerves"
            ],
            [
                43,
                "طب نووي",
                "nuclear medicine"
            ],
            [
                44,
                "عظام",
                "bones"
            ],
            [
                45,
                "علاج الألم",
                "Pain treatment"
            ],
            [
                46,
                "قلب وشرايين",
                "heart and arteries"
            ],
            [
                47,
                "نسائية وتوليد",
                "Obstetrics and Gynecology"
            ],
            [
                48,
                "نفسي",
                "mental illness"
            ],
            [
                49,
                "رعاية تطفلية",
                "intrusive care"
            ],
            [
                1,
                "جلدية كبار",
                "Adult Dermatology"
            ],
            [
                1,
                "امراض الاطفال الجلدية",
                "Pediatric Dermatology"
            ],
            [
                1,
                "الجلدية التجميلية والليزر",
                "Cosmetic Dermatology and Laser"
            ],
            [
                1,
                "متابعة الامراض الجلدية",
                "Dermatology Follow Up"
            ],
            [
                1,
                "الأمراض الجلدية التناسلية",
                "Genital Dermatology"
            ],

            [
                2,
                "جراحة الوجه والفكين",
                "Oral and Maxillofacial Surgery"
            ],
            [
                2,
                "تقويم الأسنان",
                "orthodontics"
            ],
            [
                2,
                "طب اسنان اطفال",
                "Pediatric Dentistry"
            ],
            [
                2,
                "طب الأسنان التجميلي",
                "Cosmetic Dentistry"
            ],
            [
                2,
                "حشو وعلاج الجذور والاعصاب",
                "Filling and treatment of roots and nerves"
            ],
            [
                2,
                "اشعة الاسنان",
                "dental x-rays"
            ],
            [
                2,
                "أمراض الفم",
                "Oral diseases"
            ],
            [
                2,
                "علاج اللثة",
                "gum treatment"
            ],
            [
                2,
                "طب أسنان الكبار",
                "Adult Dentistry "
            ],
            [
                2,
                "طب أسنان كبار السن",
                "Elder Dentistry"
            ],
            [
                2,
                "تجميل الأسنان بالليزر",
                "Cosmetic Dentistry By Laser"
            ],
            [
                2,
                "طب الأسنان الوقائي",
                "Preventive Dentistry"
            ],
            [
                2,
                "تركيبات اسنان",
                "dental implants"
            ],

            [
                3,
                "الاشعة العلاجية",
                "therapeutic radiology"
            ],
            [
                3,
                "اورام كبار",
                "Adult Oncology"
            ],
            [
                3,
                "اورام اطفال",
                "Pediatric Oncology"
            ],
            [
                3,
                "علاج اورام بالإشعاع",
                "Radiation Oncology"
            ],
            [
                3,
                "جراحة اورام المخ",
                "brain tumor surgery"
            ],
            [
                3,
                "جراحة اورام القولون",
                "Colon tumor surgery"
            ],
            [
                3,
                "جراحة اورام الكبد",
                "Liver tumor surgery"
            ],
            [
                3,
                "جراحة اورام الرئة",
                "Lung tumor surgery"
            ],
            [
                3,
                "جراحة اورام العظام",
                "Orthopedic surgery"
            ],
            [
                3,
                "جراحة اورام البروستاتا",
                "Prostate tumor surgery"
            ],
            [
                3,
                "جراحة اورام كبار",
                "Adult Oncology Surgery"
            ],
            [
                3,
                "جراحة اورام المعدة",
                "stomach tumor surgery"
            ],

            [
                4,
                "امراض سارية و معدية",
                "Communicable and contagious diseases"
            ],
            [
                4,
                "باطني كبار",
                "Adult Internal Medicine"
            ],
            [
                4,
                "باطني اطفال",
                "Pediatric Internal Medicine"
            ],

            [
                5,
                "جراحة قلب الأطفال",
                "Pediatric Heart Surgery"
            ],
            [
                5,
                "جراحة عامة اطفال",
                "Pediatric general surgery"
            ],
            [
                5,
                "جراحة تشوهات اطفال وعيوب خلقية",
                "Pediatric malformations and birth defects surgery"
            ],
            [
                5,
                "جراحة اورام اطفال",
                "Pediatric oncology surgery"
            ],
            [
                5,
                "جراحة انف و اذن و حنجرة اطفال",
                "Pediatric Ear Nose and throat Surgery"
            ],
            [
                5,
                "جراحة أعصاب الأطفال",
                "Pediatric Neurosurgery"
            ],
            [
                5,
                "جراحة الأوعية الدموية للأطفال",
                "Pediatric Vascular Surgery"
            ],
            [
                5,
                "جراحة جهاز هضمي وتنظير اطفال",
                "Pediatric gastrointestinal surgery and endoscopy"
            ],

            [
                6,
                "جراحة اوعية دموية كبار",
                "Adult Vascular Surgery"
            ],
            [
                6,
                "جراحة اوعية دموية اطفال",
                "Pediatric Vascular Surgery"
            ],
            [
                6,
                "علاج قدم سكري",
                "diabetic foot treatment"
            ],
            [
                6,
                "علاج دوالي الساق",
                "Varicose veins treatment"
            ],

            [
                7,
                "جراحة المنظار",
                "Endoscopic Surgery"
            ],
            [
                7,
                "جراحة اورام الثدي",
                "Breast tumor surgery"
            ],
            [
                7,
                "جراحة عامة كبار",
                "Adult General Surgery"
            ],
            [
                7,
                "جراحة عامة للاطفال",
                "Pediatric General Surgery"
            ],
            [
                7,
                "جراحة بطن",
                "Abdominal surgery"
            ],
            [
                7,
                "جراحة غدد صماء",
                "Endocrine surgery"
            ],
            [
                7,
                "جراحة جهاز هضمي و تنظير كبار",
                "Adult Gastrointestinal and Endoscopic Surgery"
            ],
            [
                7,
                "جراحة اصابات وحوادث",
                "Trauma and accident surgery"
            ],

            [
                8,
                "جراحة عمود فقري كبار",
                "Adult "
            ],
            [
                8,
                "جراحة دمج الفقرات",
                "Spinal fusion surgery"
            ],
            [
                8,
                "جراحة تضيق العمود الفقري",
                "Spinal stenosis surgery"
            ],
            [
                8,
                "جراحة عمود فقري صغار",
                "Pediatric"
            ],

            [
                9,
                "جهاز هضمي وتنظير كبار",
                "Adult Gastroenterology and Endoscopy"
            ],
            [
                9,
                "جهاز هضمي وتنظير صغار",
                "Pediatric Gastroenterology and Endoscopy"
            ],

            [
                10,
                "حساسية ومناعة كبار",
                "Adult Allergy and Immunology"
            ],
            [
                10,
                "حساسية ومناعة صغار",
                "Pediatric Allergy and Immunology"
            ],
            [
                10,
                "حساسية الجهاز التنفسي",
                "Respiratory Tract Allergy"
            ],
            [
                10,
                "حساسية المناعة الذاتية",
                "Autoimmune Allergy"
            ],
            [
                10,
                "حساسية الجلد",
                "Nutrition allergy"
            ],
            [
                10,
                "متابعة الحساسية",
                "Allergy Follow Up"
            ],
            [
                10,
                "اختبار الحساسية",
                "Allergy testing"
            ],
            [
                10,
                "وصفات أدوية الحساسية",
                "Allergy Medication Prescriptions"
            ],
            [
                10,
                "العلاج المناعي لعلاج الحساسية",
                "Immunotherapy for Treatment of Allergy"
            ],
            [
                10,
                "حساسية الصدر",
                "Chest Allergy"
            ],
            [
                10,
                " حساسية الدواء",
                "Medicine Allergy"
            ],
            [
                10,
                "حساسية التغذية",
                "Nutrition Allergy"
            ],
            [
                10,
                "حساسية العيون",
                "Eye Allergy"
            ],

            [
                 12,
                "امراض ذكورة",
                "Andrology Diseases"
            ],
            [
                 12,
                "عقم ذكور",
                "male infertility"
            ],
            [
                 12,
                "دوالي الخصية",
                "Varicocele"
            ],
            [
                 12,
                "دعامة الانتصاب",
                "erection prop"
            ],

            [
                13,
                "روماتيزم كبار",
                "Adult rheumatism"
            ],
            [
                13,
                "روماتيزم صغار",
                "Pediatric rheumatism"
            ],

            [
                14,
                "سكر وغدد صماء اطفال",
                "Pediatric Diabetes and Endocrinology"
            ],
            [
                14,
                "سكر وغدد صماء كبار",
                "Adult Diabetes and Endocrinology"
            ],

            [
                16,
                "تغذية كبار",
                "Adult Dietitian and Nutrition"
            ],
            [
                16,
                "تغذية اطفال",
                "Pediatric  Dietitian and Nutrition"
            ],

            [
                17,
                "صدرية و جهاز تنفسي اطفال",
                "Pediatric  Chest and Respiratory"
            ],
            [
                17,
                "صدرية و جهاز تنفسي كبار",
                "Adult Chest and Respiratory"
            ],

            [
                20,
                "كبار ",
                "Adult Physiotherapy and sports injuries"
            ],
            [
                20,
                "صغار",
                " Pediatric Physiotherapy and sports injuries"
            ],
            [
                20,
                "اصابات رياضية",
                "sports injuries"
            ],

            [
                21,
                "عيون أطفال",
                " Pediatric Ophthalmology"
            ],
            [
                21,
                "عيون كبار",
                "Adult Ophthalmology"
            ],
            [
                21,
                "ليزك وتصحيح الابصار",
                "Lasik and vision correction"
            ],
            [
                21,
                "جراحة شبكية وجسم زجاجي",
                "Retinal and vitreous surgery"
            ],
            [
                21,
                "تاهيل بصري",
                "visual rehabilitation"
            ],
            [
                21,
                "المياه البيضاء",
                "eye white water"
            ],
            [
                21,
                "زراعة القرنية",
                "corneal transplant"
            ],
            [
                21,
                "علاج الشبكية بالليزر",
                "Retinal laser treatment"
            ],
            [
                21,
                "حول",
                "eye disease"
            ],

            [
                22,
                "كبد كبار",
                "Adult Hepatology"
            ],
            [
                22,
                "كبد صغار",
                " Pediatric Hepatology"
            ],
            [
                22,
                "زراعة كبد",
                "Liver transplant"
            ],
            [
                23,
                "كلى اطفال",
                "Pediatric Nephrology "
            ],
            [
                23,
                "كلى كبار",
                "Adult Nephrology "
            ],
            [
                23,
                "زراعة كلى",
                "Kidney transplant"
            ],

            [
                24,
                "مسالك بولية كبار",
                "Adult Urology"
            ],
            [
                24,
                "متابعة جراحة المسالك البولية",
                "Urology Follow Up"
            ],
            [
                24,
                "مسالك بولية اطفال",
                "Pediatric Neurology"
            ],

            [
                25,
                "الأشعة التداخلية",
                "Interventional Radiology"
            ],
            [
                25,
                "الاشعة التشخيصية",
                "diagnostic radiology"
            ],

            [
                26,
                "حديثي الولادة",
                "new born"
            ],
            [
                26,
                "اطفال",
                "Pediatric"
            ],
            [
                26,
                "رضاعة طبيعية",
                "Breast feeding"
            ],
            [
                26,
                "طهور اطفال",
                "purification of Pediatric "
            ],

            [
                27,
                "جراحة تجميل الوجه",
                "Facial plastic surgery"
            ],
            [
                27,
                "جراحة تجميل الحروق",
                "Burn plastic surgery"
            ],
            [
                27,
                "جراحة تجميل العيون",
                "Eye plastic surgery"
            ],
            [
                27,
                "جراحة تجميل اليد",
                "hand plastic surgery"
            ],
            [
                27,
                "جراحة تجميل الانف",
                "rhinoplasty surgery"
            ],
            [
                27,
                "جراحة تجميل الثدي",
                "Breast plastic surgery"
            ],
            [
                27,
                "الجراحة التجميلية للمهبل مع اعادة الجسم الصلب",
                "Vaginal plastic surgery with hard body restoration"
            ],

            [
                30,
                "امراض دم كبار",
                "Adult  blood diseases"
            ],
            [
                30,
                "زرع خلايا جذعية",
                "stem cell transplant"
            ],

            [
                31,
                "جراحة الوجه والرقبة",
                "Face and neck surgery"
            ],
            [
                31,
                "انف واذن وحنجرة كبار",
                "Adult  ear, nose and throat"
            ],
            [
                31,
                "انف و اذن و حنجرة اطفال",
                "Pediatric ear, nose and throat"
            ],
            [
                31,
                "اضطراب السمع و التوازن",
                "Hearing and balance disorder"
            ],
            [
                31,
                "جراحة انف و اذن و حنجرة كبار",
                "Adult Ear, Nose and Throat Surgery"
            ],
            [
                31,
                "جراحة انف و اذن و حنجرة اطفال",
                "Pediatric ear, nose and throat surgery"
            ],

            [
                32,
                "جراحة دماغ و اعصاب كبار",
                "Adult  brain and neurosurgery"
            ],
            [
                32,
                "جراحة دماغ و اعصاب اطفال",
                "Pediatric brain and neurosurgery"
            ],
            [
                33,
                "جراحة قلب كبار",
                "Adult  heart surgery"
            ],
            [
                33,
                "جراحة قلب اطفال",
                "Pediatric heart surgery"
            ],
            [
                35,
                "جراحة صدر كبار",
                "Adult thoracic surgery"
            ],
            [
                35,
                "جراحة صدر اطفال",
                "Pediatric chest surgery"
            ],

            [
                41,
                "طب عام كبار",
                "Adult  general medicine"
            ],
            [
                41,
                "طب عام صغار",
                "Pediatric general medicine"
            ],

            [
                42,
                "دماغ واعصاب اطفال",
                "Pediatric brain and nerves"
            ],
            [
                42,
                "دماغ واعصاب كبار",
                "Adult  brain and nerves"
            ],
            [
                44,
                "عظام كبار",
                "Adult bones"
            ],
            [
                44,
                "عظام اطفال",
                "Pediatric bones"
            ],
            [
                44,
                "جراحة عظام كبار",
                "Adult  orthopedic surgery"
            ],
            [
                44,
                "جراحة عظام اطفال",
                "Pediatric orthopedic surgery"
            ],
            [
                44,
                "تشوهات عظام",
                "bone deformities"
            ],
            [
                44,
                "عظام اليد والكتف",
                "Hand and shoulder bones"
            ],
            [
                44,
                "عظام القدم والكاحل",
                "Foot and ankle bones"
            ],
            [
                44,
                "تغيير المفاصل",
                "change joints"
            ],
            [
                44,
                "جراحة الاعصاب الطرفية",
                "Peripheral nerve surgery"
            ],
            [
                44,
                "تقويم عظام",
                "orthotics"
            ],
            [
                44,
                "اصابات ملاعب وتنظير مفاصل",
                "Sports injuries and arthroscopy"
            ],
            [
                45,
                "كبار ",
                "Adult "
            ],
            [
                45,
                "صغار",
                "Pediatric"
            ],
            [
                46,
                "قلب اطفال",
                "kids heart"
            ],
            [
                46,
                "قلب كبار",
                "Adult heart"
            ],
            [
                46,
                "شرايين اطفال",
                "children's arteries"
            ],
            [
                46,
                "شرايين كبار",
                "Adult  arteries"
            ],
            [
                48,
                "نفسي كبار",
                "Adult  mental illness"
            ],
            [
                48,
                "نفسي صغار",
                "mental illness"
            ],
            [
                48,
                "علاج الادمان",
                "addiction cure"
            ],
            [
                48,
                "علاج السموم",
                "Toxin treatment"
            ],
            [
                48,
                "استشارات اسرية",
                "family counseling"
            ],
        ];


        foreach ($speciality as $spec) {
            DoctorSpeciality::create([
                'name_ar' => $spec[1],
                'name_en' => $spec[2],
                'alias_name_ar' => str_replace(array(' ','"','>','<','#','%','|','/'),'-',$spec[1]),
                'alias_name_en' => str_replace(array(' ','"','>','<','#','%','|','/'),'-',$spec[2]),
                'updated_by' => 1,
            ]);
        }

    }
}



