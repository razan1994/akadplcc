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
            "جلدية و تناسلية",
            " Dermatology ",
            ],
            [
            "جلدية كبار",
            "Adult Dermatology"
            ],
            [
            "امراض الاطفال الجلدية",
            "Pediatric Dermatology"
            ],
            [
            "الجلدية التجميلية والليزر",
            "Cosmetic Dermatology and Laser"
            ],
            [
            "متابعة الامراض الجلدية",
            "Dermatology Follow Up"
            ],
            [
            "الأمراض الجلدية التناسلية",
            "Genital Dermatology"
            ],
            [
            "حساسية الجلد",
            "Skin Allergy"
            ],
            [
            "اسنان",
            " Dentistry "
            ],
            [
            "جراحة الوجه والفكين",
            "Oral and Maxillofacial Surgery"
            ],
            [
            "تقويم الأسنان",
            "orthodontics"
            ],
            [
            "طب اسنان اطفال",
            "Pediatric Dentistry"
            ],
            [
            "طب الأسنان التجميلي",
            "Cosmetic Dentistry"
            ],
            [
            "حشو وعلاج الجذور والاعصاب",
            "Filling and treatment of roots and nerves"
            ],
            [
            "اشعة الاسنان",
            "dental x-rays"
            ],
            [
            "أمراض الفم",
            "Oral diseases"
            ],
            [
            "علاج اللثة",
            "gum treatment"
            ],
            [
            "طب أسنان الكبار",
            "Adult Dentistry "
            ],
            [
            "طب أسنان كبار السن",
            "Elder Dentistry"
            ],
            [
            "تجميل الأسنان بالليزر",
            "Cosmetic Dentistry By Laser"
            ],
            [
            "طب الأسنان الوقائي",
            "Preventive Dentistry"
            ],
            [
            "تركيبات اسنان",
            "dental implants"
            ],
            [
            "أورام",
            "Oncology (Tumor)"
            ],
            [
            "الاشعة العلاجية",
            "therapeutic radiology"
            ],
            [
            "اورام كبار",
            "Adult Oncology"
            ],
            [
            "اورام اطفال",
            "Pediatric Oncology"
            ],
            [
            "علاج اورام بالإشعاع",
            "Radiation Oncology"
            ],
            [
            "جراحة اورام المخ",
            "brain tumor surgery"
            ],
            [
            "جراحة اورام القولون",
            "Colon tumor surgery"
            ],
            [
            "جراحة اورام الكبد",
            "Liver tumor surgery"
            ],
            [
            "جراحة اورام الرئة",
            "Lung tumor surgery"
            ],
            [
            "جراحة اورام العظام",
            "Orthopedic surgery"
            ],
            [
            "جراحة اورام البروستاتا",
            "Prostate tumor surgery"
            ],
            [
            "جراحة اورام كبار",
            "Adult Oncology Surgery"
            ],
            [
            "أمراض الدم",
            "Hematology "
            ],
            [
            "جراحة اورام المعدة",
            "stomach tumor surgery"
            ],
            [
            "جراحة المخ",
            "Neurosurgery"
            ],
            [
            "طب جراحة العمود الفقري والعناية الحرجة",
            "Medicine Spine Surgery Critical Care"
            ],
            [
            "باطني",
            "Internal Medicine "
            ],
            [
            "امراض سارية و معدية",
            "Communicable and contagious diseases"
            ],
            [
            "باطني كبار",
            "Adult Internal Medicine"
            ],
            [
            "باطني اطفال",
            "Pediatric Internal Medicine"
            ],
            [
            "امراض الكلى",
            "Nephrology "
            ],
            [
            "امراض الكلى بالغين",
            "Adult Nephrology "
            ],
            [
            "جهاز هضمي وتنظير",
            "Gastroenterology and Endoscopy"
            ],
            [
            "الطب الباطني",
            "Internal Medicine"
            ],
            [
            "جهاز هضمي وتنظير بالغين",
            " Adult Gastroenterology and Endoscopy"
            ],
            [
            "الطب الباطني للبالغين",
            "Adult Internal Medicine"
            ],
            [
            "الطب الباطني",
            "Internal Medicine"
            ],
            [
            "أمراض الرئة",
            "Pulmonology "
            ],
            [
            "جراحة أطفال",
            " Pediatric Surgery "
            ],
            [
            "جراحة قلب الأطفال",
            "Pediatric Heart Surgery"
            ],
            [
            "جراحة عامة اطفال",
            "Pediatric general surgery"
            ],
            [
            "جراحة تشوهات اطفال وعيوب خلقية",
            "Pediatric malformations and birth defects surgery"
            ],
            [
            "جراحة اورام اطفال",
            "Pediatric oncology surgery"
            ],
            [
            "جراحة انف و اذن و حنجرة اطفال",
            "Pediatric Ear Nose and throat Surgery"
            ],
            [
            "جراحة أعصاب الأطفال",
            "Pediatric Neurosurgery"
            ],
            [
            "جراحة الأوعية الدموية للأطفال",
            "Pediatric Vascular Surgery"
            ],
            [
            "جراحة جهاز هضمي وتنظير اطفال",
            "Pediatric gastrointestinal surgery and endoscopy"
            ],
            [
            "جراحة مسالك بولية ",
            "Pediatric Urology Surgery"
            ],
            [
            "جراحة تشوهات الأطفال والعيوب الخلقية",
            "Pediatric Deformities and Birth Defects Surgery"
            ],
            [
            "جراحة أوعية دموية",
            "Vascular Surgery (Arteries and Vein Surgery)"
            ],
            [
            "جراحة اوعية دموية كبار",
            "Adult Vascular Surgery"
            ],
            [
            "جراحة اوعية دموية اطفال",
            "Pediatric Vascular Surgery"
            ],
            [
            "علاج قدم سكري",
            "diabetic foot treatment"
            ],
            [
            "علاج دوالي الساق",
            "Varicose veins treatment"
            ],
            [
            "جراحة عامة",
            "General Surgery "
            ],
            [
            "جراحة المنظار",
            "Endoscopic Surgery"
            ],
            [
            "جراحة اورام الثدي",
            "Breast tumor surgery"
            ],
            [
            "جراحة عامة كبار",
            "Adult General Surgery"
            ],
            [
            "جراحة عامة للاطفال",
            "Pediatric General Surgery"
            ],
            [
            "جراحة بطن",
            "Abdominal surgery"
            ],
            [
            "جراحة غدد صماء",
            "Endocrine surgery"
            ],
            [
            "جراحة جهاز هضمي و تنظير كبار",
            "Adult Gastrointestinal and Endoscopic Surgery"
            ],
            [
            "جراحة اصابات وحوادث",
            "Trauma and accident surgery"
            ],
            [
            "جراحة البطن",
            "Abdominal Surgery"
            ],
            [
            "جراحة الغدد الصماء ",
            "Endocrinal Surgery"
            ],
            [
            "جراحة القولون والشرج",
            "Colon and Anal surgery"
            ],
            [
            "جراحة السمنة والمناظير",
            "Obesity and Laparoscopic Surgery"
            ],
            [
            "ورم الثدي",
            "Breast Tumor"
            ],
            [
            "جراحة السمنة",
            " Obesity Surgery"
            ],
            [
            "جراحة الحوادث و الرضوض",
            "Trauma and Accident Surgery Adult "
            ],
            [
            "جراحة عمود فقري",
            "Spinal Surgery "
            ],
            [
            "جراحة عمود فقري كبار",
            "Adult "
            ],
            [
            "جراحة دمج الفقرات",
            "Spinal fusion surgery"
            ],
            [
            "جراحة تضيق العمود الفقري",
            "Spinal stenosis surgery"
            ],
            [
            "جراحة عمود فقري صغار",
            "Pediatric"
            ],
            [
            "جراحة الاعصاب",
            "Neurosurgery"
            ],
            [
            "جهاز هضمي وتنظير",
            " Gastroenterology and Endoscopy "
            ],
            [
            "جهاز هضمي وتنظير كبار",
            "Adult Gastroenterology and Endoscopy"
            ],
            [
            "جهاز هضمي وتنظير صغار",
            "Pediatric Gastroenterology and Endoscopy"
            ],
            [
            "حساسية ومناعة",
            "Allergy and immunity"
            ],
            [
            "حساسية ومناعة كبار",
            "Adult Allergy and Immunology"
            ],
            [
            "حساسية ومناعة صغار",
            "Pediatric Allergy and Immunology"
            ],
            [
            "حساسية الجهاز التنفسي",
            "Respiratory Tract Allergy"
            ],
            [
            "حساسية المناعة الذاتية",
            "Autoimmune Allergy"
            ],
            [
            "حساسية الجلد",
            "Nutrition allergy"
            ],
            [
            "متابعة الحساسية",
            "Allergy Follow Up"
            ],
            [
            "اختبار الحساسية",
            "Allergy testing"
            ],
            [
            "وصفات أدوية الحساسية",
            "Allergy Medication Prescriptions"
            ],
            [
            "العلاج المناعي لعلاج الحساسية",
            "Immunotherapy for Treatment of Allergy"
            ],
            [
            "حساسية الصدر",
            "Chest Allergy"
            ],
            [
            " حساسية الدواء",
            "Medicine Allergy"
            ],
            [
            "حساسية التغذية",
            "Nutrition Allergy"
            ],
            [
            "حساسية العيون",
            "Eye Allergy"
            ],
            [
            "حقن مجهري وأطفال أنابيب",
            "IVF and Infertility "
            ],
            [
            "أمراض النساء والعقم",
            "Gynecology and Infertility "
            ],
            [
            "أمراض النساء",
            " Gynecology "
            ],
            [
            "اطفال انابيب",
            "IVF "
            ],
            [
            "طب الأورام النسائية",
            "Gynaecologic Oncological "
            ],
            [
            "جراحة عقم النساء",
            "Surgery Female Infertility"
            ],
            [
            "سلس البول",
            "Urinary Incontinence"
            ],
            [
            "جراحة الأورام النسائية",
            "Gynaecologic Oncological Surgery"
            ],
            [
            "أطفال الأنابيب والعقم",
            "IVF and Infertility"
            ],
            [
            "عقم النساء",
            "Female Infertility"
            ],
            [
            "ذكورة وعقم",
            " Andrology and Male Infertility "
            ],
            [
            "امراض ذكورة",
            "Andrology Diseases"
            ],
            [
            "عقم ذكور",
            "male infertility"
            ],
            [
            "دوالي الخصية",
            "Varicocele"
            ],
            [
            "دعامة الانتصاب",
            "erection prop"
            ],
            [
            "أمراض الذكورة والعقم عند الذكور",
            "Andrology and Male Infertility"
            ],
            [
            "جراحة المسالك البولية للبالغين",
            "Adult Urology"
            ],
            [
            "جراحة المسالك البولية لدى الأطفال",
            "Pediatric Urology"
            ],
            [
            "الذكورة",
            "Andrology"
            ],
            [
            "جراحة المسالك البولية",
            "Urology"
            ],
            [
            "جراحة الكلى الكبار",
            "Adult Kidney Surgery"
            ],
            [
            "روماتيزم ومفاصل",
            "rheumatism"
            ],
            [
            "طب القلب",
            "Cardiology"
            ],
            [
            "روماتيزم كبار",
            "Adult rheumatism"
            ],
            [
            "أمراض القلب للبالغين",
            "Adult Cardiology"
            ],
            [
            "روماتيزم صغار",
            "Pediatric rheumatism"
            ],
            [
            "أمراض الأوعية الدموية عند البالغين",
            "Adult Vascular Diseases"
            ],
            [
            "الطب الباطني",
            "Internal Medicine"
            ],
            [
            "الطب الباطني للبالغين",
            "Adult Internal Medicine"
            ],
            [
            "طب الغدد الصماء",
            "Endocrinology"
            ],
            [
            "سكر وغدد صماء",
            "Diabetes and Endocrinology "
            ],
            [
            "سكر وغدد صماء اطفال",
            "Pediatric Diabetes and Endocrinology"
            ],
            [
            "سكر وغدد صماء كبار",
            "Adult Diabetes and Endocrinology"
            ],
            [
            "طب الغدد الصماء",
            "Endocrinology"
            ],
            [
            "السكري والغدد الصماء",
            "Diabetes and Endocrinology"
            ],
            [
            "سمعيات ",
            "Audiology "
            ],
            [
            "تغذية وحمية",
            "Dietitian and Nutrition "
            ],
            [
            "تغذية كبار",
            "Adult Dietitian and Nutrition"
            ],
            [
            "تغذية اطفال",
            "Pediatric  Dietitian and Nutrition"
            ],
            [
            "صدر وجهاز تنفسي",
            "Chest and Respiratory "
            ],
            [
            "صدرية و جهاز تنفسي اطفال",
            "Pediatric  Chest and Respiratory"
            ],
            [
            "صدرية و جهاز تنفسي كبار",
            "Adult Chest and Respiratory"
            ],
            [
            "طب الاسرة",
            "Family Medicine "
            ],
            [
            "الممارسة العامة",
            "General Practice"
            ],
            [
            "طب الأسرة",
            "Family Medicine"
            ],
            [
            "طب الأطفال العام",
            "Pediatric General Practice"
            ],
            [
            "طب الطوارئ و الحوادث ",
            "Emergency and Accidents Medicine "
            ],
            [
            "علاج طبيعي واصابات ملاعب",
            "Physiotherapy and sports injuries"
            ],
            [
            "كبار ",
            "Adult Physiotherapy and sports injuries"
            ],
            [
            "صغار",
            " Pediatric Physiotherapy and sports injuries"
            ],
            [
            "اصابات رياضية",
            "sports injuries"
            ],
            [
            "إدارة الألم",
            "Pain Management"
            ],
            [
            "عيون",
            " Ophthalmology (Eyes)"
            ],
            [
            "عيون أطفال",
            " Pediatric Ophthalmology"
            ],
            [
            "عيون كبار",
            "Adult Ophthalmology"
            ],
            [
            "ليزك وتصحيح الابصار",
            "Lasik and vision correction"
            ],
            [
            "جراحة شبكية وجسم زجاجي",
            "Retinal and vitreous surgery"
            ],
            [
            "تاهيل بصري",
            "visual rehabilitation"
            ],
            [
            "المياه البيضاء",
            "eye white water"
            ],
            [
            "زراعة القرنية",
            "corneal transplant"
            ],
            [
            "علاج الشبكية بالليزر",
            "Retinal laser treatment"
            ],
            [
            "حول",
            "eye disease"
            ],
            [
            "جراحة الشبكية",
            "Vitreous Body and Retinal Surgery"
            ],
            [
            "الحول",
            "Strabismus"
            ],
            [
            "زرع قرنية",
            "CorniaTrsnplant"
            ],
            [
            "علاج الشبكية بالليزر",
            "Retinal Laser Treatment"
            ],
            [
            "إعتمام عدسة العين",
            "Cataract"
            ],
            [
            "كبد",
            "Hepatology (Liver Doctor)"
            ],
            [
            "كبد كبار",
            "Adult Hepatology"
            ],
            [
            "كبد صغار",
            " Pediatric Hepatology"
            ],
            [
            "زراعة كبد",
            "Liver transplant"
            ],
            [
            "كلى",
            "Nephrology "
            ],
            [
            "كلى اطفال",
            "Pediatric Nephrology "
            ],
            [
            "كلى كبار",
            "Adult Nephrology "
            ],
            [
            "زراعة كلى",
            "Kidney transplant"
            ],
            [
            "دوالي",
            "Varicocele"
            ],
            [
            "مسالك بولية",
            "Urology (Urinary System)"
            ],
            [
            "مسالك بولية كبار",
            "Adult Urology"
            ],
            [
            "متابعة جراحة المسالك البولية",
            "Urology Follow Up"
            ],
            [
            "مسالك بولية اطفال",
            "Pediatric Neurology"
            ],
            [
            "أشعة",
            "rays"
            ],
            [
            "الأشعة التداخلية",
            "Interventional Radiology"
            ],
            [
            "الاشعة التشخيصية",
            "diagnostic radiology"
            ],
            [
            "أطفال وحديثي الولادة",
            "Babies and newborns"
            ],
            [
            "حديثي الولادة",
            "new born"
            ],
            [
            "اطفال",
            "Pediatric"
            ],
            [
            "رضاعة طبيعية",
            "Breast feeding"
            ],
            [
            "طهور اطفال",
            "purification of Pediatric "
            ],
            [
            "جراحة التجميل",
            "plastic surgery"
            ],
            [
            "جراحة تجميل الوجه",
            "Facial plastic surgery"
            ],
            [
            "جراحة تجميل الحروق",
            "Burn plastic surgery"
            ],
            [
            "جراحة تجميل العيون",
            "Eye plastic surgery"
            ],
            [
            "جراحة تجميل اليد",
            "hand plastic surgery"
            ],
            [
            "جراحة تجميل الانف",
            "rhinoplasty surgery"
            ],
            [
            "جراحة تجميل الثدي",
            "Breast plastic surgery"
            ],
            [
            "الجراحة التجميلية للمهبل مع اعادة الجسم الصلب",
            "Vaginal plastic surgery with hard body restoration"
            ],
            [
            "نطق و تخاطب ",
            "Phoniatrics (Speech)"
            ],
            [
            "أمراض الدم",
            "Blood diseases"
            ],
            [
            "امراض دم اطفال",
            "Pediatric hematology"
            ],
            [
            "امراض دم كبار",
            "Adult  blood diseases"
            ],
            [
            "زرع خلايا جذعية",
            "stem cell transplant"
            ],
            [
            "أنف وأذن وحنجرة",
            "Ear, Nose and Throat"
            ],
            [
            "جراحة الوجه والرقبة",
            "Face and neck surgery"
            ],
            [
            "انف واذن وحنجرة كبار",
            "Adult  ear, nose and throat"
            ],
            [
            "انف و اذن و حنجرة اطفال",
            "Pediatric ear, nose and throat"
            ],
            [
            "اضطراب السمع و التوازن",
            "Hearing and balance disorder"
            ],
            [
            "جراحة انف و اذن و حنجرة كبار",
            "Adult Ear, Nose and Throat Surgery"
            ],
            [
            "جراحة انف و اذن و حنجرة اطفال",
            "Pediatric ear, nose and throat surgery"
            ],
            [
            "جراحة الدماغ و الأعصاب",
            "Brain and Neurosurgery"
            ],
            [
            "جراحة دماغ و اعصاب كبار",
            "Adult  brain and neurosurgery"
            ],
            [
            "جراحة دماغ و اعصاب اطفال",
            "Pediatric brain and neurosurgery"
            ],
            [
            "جراحة القلب",
            "Heart Surgery"
            ],
            [
            "جراحة قلب كبار",
            "Adult  heart surgery"
            ],
            [
            "جراحة قلب اطفال",
            "Pediatric heart surgery"
            ],
            [
            "جراحة السمنة وتخفيف الوزن",
            "Bariatric surgery and weight loss"
            ],
            [
            "جراحة الصدر",
            "Thoracic surgery"
            ],
            [
            "جراحة صدر كبار",
            "Adult thoracic surgery"
            ],
            [
            "جراحة صدر اطفال",
            "Pediatric chest surgery"
            ],
            [
            "التخدير والعناية المركزة",
            "Anesthesia and intensive care"
            ],
            [
            "التربية الخاصة",
            "Special Education"
            ],
            [
            "العلاج الوظيفي",
            "Occupational Therapy"
            ],
            [
            "العناية الحرجة",
            "critical care"
            ],
            [
            "تجميل و ليزر",
            "Cosmetic and laser"
            ],
            [
            "طب عام",
            "General Medicine"
            ],
            [
            "طب عام كبار",
            "Adult  general medicine"
            ],
            [
            "طب عام صغار",
            "Pediatric general medicine"
            ],
            [
            "دماغ وأعصاب",
            "brain and nerves"
            ],
            [
            "دماغ واعصاب اطفال",
            "Pediatric brain and nerves"
            ],
            [
            "دماغ واعصاب كبار",
            "Adult  brain and nerves"
            ],
            [
            "طب نووي",
            "nuclear medicine"
            ],
            [
            "عظام",
            "bones"
            ],
            [
            "عظام كبار",
            "Adult bones"
            ],
            [
            "عظام اطفال",
            "Pediatric bones"
            ],
            [
            "جراحة عظام كبار",
            "Adult  orthopedic surgery"
            ],
            [
            "جراحة عظام اطفال",
            "Pediatric orthopedic surgery"
            ],
            [
            "تشوهات عظام",
            "bone deformities"
            ],
            [
            "عظام اليد والكتف",
            "Hand and shoulder bones"
            ],
            [
            "عظام القدم والكاحل",
            "Foot and ankle bones"
            ],
            [
            "تغيير المفاصل",
            "change joints"
            ],
            [
            "جراحة الاعصاب الطرفية",
            "Peripheral nerve surgery"
            ],
            [
            "تقويم عظام",
            "orthotics"
            ],
            [
            "اصابات ملاعب وتنظير مفاصل",
            "Sports injuries and arthroscopy"
            ],
            [
            "علاج الألم",
            "Pain treatment"
            ],
            [
            "كبار ",
            "Adult "
            ],
            [
            "صغار",
            "Pediatric"
            ],
            [
            "قلب وشرايين",
            "heart and arteries"
            ],
            [
            "قلب اطفال",
            "kids heart"
            ],
            [
            "قلب كبار",
            "Adult heart"
            ],
            [
            "شرايين اطفال",
            "children's arteries"
            ],
            [
            "شرايين كبار",
            "Adult  arteries"
            ],
            [
            "نسائية وتوليد",
            "Obstetrics and Gynecology"
            ],
            [
            "نفسي",
            "mental illness"
            ],
            [
            "نفسي كبار",
            "Adult  mental illness"
            ],
            [
            "نفسي صغار",
            "mental illness"
            ],
            [
            "علاج الادمان",
            "addiction cure"
            ],
            [
            "علاج السموم",
            "Toxin treatment"
            ],
            [
            "استشارات اسرية",
            "family counseling"
            ],
            [
            "رعاية تطفلية",
            "intrusive care"
            ]
        ];


        foreach ($array as $spec) {
            DoctorSpeciality::create([
                'name_ar' => $spec[0],
                'name_en' => $spec[1],
                'alias_name_ar' => str_replace(array(' ','"','>','<','#','%','|','/'),'-',$spec[0]),
                'alias_name_en' => str_replace(array(' ','"','>','<','#','%','|','/'),'-',$spec[1]),
                'updated_by' => 1,
            ]);
        }

    }
}

