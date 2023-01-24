var cars={
    BOYS:['Boys Hostel'],
    CAO:['Accreditation and Ranking','Alumni','Benguluru School of Mgt.Studies','Benguluru School of Tech','Campus Life','Central Administrative Office','Center for Autonomous Systems','Centre for Adv.Tech. and Solutions','Centre for Distance Learning','Centre for Learning and Sustainability','Campus Office','Chief Operating Office','Directorate of Foreign Student Affairs','Directorate of Admissions','Directorate of Consultancy','Digital Learning','Learning and Development','Directorate of Academic Affairs','Directorate of Evaluation','Directorate of External Relations','Department of Hospitality','Department of Projects','Department of Security','Directorate of Student Life','E-Learning Resource Centre','Finance','GITAM Career Guidance Centre','GITAM Institute of Medical Sciences','GITAM Press','GITAM Media Centre','GITAM Society','GITAM School of Law','Horticulture','Boys Hostel','Girls Hostel','Knowledge Resource Center','Marketing','Central Administrative Office','Physical Education and Yoga','Research & Consultancy','Directorate of UGC Affairs & Research Activities' , 'Venture Development Centre' , 'GITAM University Institute for Development of Entrepreneurship'],
    CDL:['Centre for Distance Learning'],
    DENTAL:['Anaesthesia','Anatomy','Biochemistry','Public Health Dentistry','Conservative Dentistry & Endodontics','General Medicine','General Surgery','Library','Microbiology','Oral Medicine','Oral Medicine & Radiology','Oral Pathology & Microbiology','Oral & Maxillofacial Surgery','Orthodontics','Pathology','Pedodontics','Periodontics','Phantom Lab','Pharmacology','Physiology','Principals Office','Prosthodontics'],
    GIIB:['GITAM School of International Business','Principals Office'],
    GIM:['GITAM Institute of Management'],
    GIMS:['APPLIED PHILOSOPHY','Business Analytics & Fintech','BBA Honours','Bachelor of Business Management','Business Analytics','Center for Gandhian Studies','Entrepreneurship','FINANCE','GITAM INSTITUTE OF MANAGEMENT','Human Resource Management','International Business','INTEGRATED MASTER OF BUSSINESS ADMINISTRATION','Library','Marketing','Master of Business Administration','Master of Business Administration Full Time','Master of Business Administration Part Time','MBACMU','MHRM','MPHIL','MSC','INSTITUTE OFFICE','OPERATIONS','PGDRIM','PHD'],
    GIMSRC:['Academic Section','Administrative Office','Anatomy','Anaesthesia','Accounts Section','Blood Bank','Biochemistry','Central Laboratory','Community Medicine','Central Research Lab','Cardiac Surgery','Department of Human Resource','Dermatology, venerealogy and leprosy','Emergency Medicine','OTO-Rhinolaryngology','Forensic Medicine','General Medicine','General Surgery','Library','MICROBIOLOGY','obstetrics and Gynaecology','Optholmology','Orthopaedics','Paediatrics','Pathology','Pharmacology','Physiology','Physical Medicine & Rehabilitation','Paramedical Section','Psychiatry','Radio Diagnosis','Radio Therapy','Respiratory Medicine','Urban Health Centre'],
    GIMSRH:['Aarogyasree','Administrative Office','Anaesthesia','Bio-Medical','BILLING SECTION','Casualty','Central Gas','CSSD','Department of Security','Dermatology,venerealogy and leprosy','ECG','OTO-Rhinolaryngology','Engineering Services','ESI DEPARTMENT','General Stores','General Medicine','General Surgery','Hospitality','Laundry','MEDICAL RECORDS DEPARTMENT','Nursing','Nutrition','NTR VAIDYA SEVA','Obstetrics and Gynaecology','Optholmology','Orthopaedics','Operation Theatre','Paediatrics','Pharmacy','Physical Medicine & Rehabilitation','Psychiatry','Radio Diagnosis','RMO','Radio Therapy','Respiratory Medicine','Transport'],
    GIN:['Principals Office'],
    GIP:['Bachelor of Pharmacy','GITAM Institute of Pharmacy','Master of Pharmacy','Principals Office'],
    GIRLS:['Girls Hostel'],
    GIS:['Mathematics','Biochemistry and Bioinformatics','Biotechnology','Chemistry','CIRD','Computer Science','Dean Office','Physics','English','Environmental Science','Master of Computer Applications','Microbiology and FST(Food Science & Technology)','Principals Office'],
    GIT:['Biotechnology','Dept. of Basic Sciences and Humanities','Chemistry','English','Mathematics','Physics','Civil Engineering','Computer Science Engineering','Electronics and Communication Engineering','Electrical and Electronics Engineering','Electronics and Instrumentation Engineering','Guest Staff','Boys Hostel','Girls Hostel','Industrial Engineering','Industrial Production Engineering','Information Technology','Mechanical Engineering','Principals Office','TEQIP','Directorate of Training & Placements','Electrical Electronics and Communication Engineering','All Departments'],
    GSA:['GITAM School of Architecture','Principals Office',],
    GSGS:['ECONOMICS','APPLIED PSYCHOLOGY','English','Languages','Centre for Research in Public Policy','ENGLISH','Fine and Performing Arts','History','Humanities and Social Sciences','PRINCIPAL OFFICE','Political Science'],
    GSL:['GITAM School of Law','Principals Office'],
    PTY:['Administrative Office','Department of Physiotherapy','Physical Medicine & Rehabilitation'],
    SA:['Student Activites'],
    SWS:['Administrative Office'],
}

// getting the main and sub menus

var main= document.getElementById('main_menu');
var sub = document.getElementById('sub_menu');

// Trigger the Event when main menu change occurs

main.addEventListener('change' ,function(){

// getting a selected option

var selected_option = cars[this.value];

// removing the sub menu options using while loop

while(sub.options.length > 0){

sub.options.remove(0);
}
// conver the selected object into array and create a options for each array elements
// using Option constructor it will create html element with the given value and innerText

Array.from(selected_option).forEach(function(el){
    let option = new Option(el,el);
    // append the child option in sub menu
    sub.appendChild(option);

});
});