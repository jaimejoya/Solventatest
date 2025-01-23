@extends('main')

@section('content')

    {{-- Module Super Administrator --}}

    <template v-if="menu==100">
        <admin-partnerts></admin-partnerts>
    </template>

    <template v-if="menu==101">
        <modules-admin></modules-admin>
    </template>

    <template v-if="menu==102">
        <sub-modules-admin></sub-modules-admin>
    </template>

    <template v-if="menu==103">ç
        <modules-app></modules-app>
    </template>

    <template v-if="menu==104">
        <information-partner></information-partner>
    </template>

    <template v-if="menu==105">
        <submodules-app></submodules-app>
    </template>

    {{-- MODULO PRINCIPAL  --}}

    <template v-if="menu==0">
        <statistics-activities></statistics-activities> 
    </template>

    <template v-if="menu==1">
        <list-roles></list-roles>
    </template>

    <template v-if="menu==2">
        <list-permissions></list-permissions>
    </template>

    <template v-if="menu==9">
        <list-users-partners></list-users-partners>
    </template>

    <template v-if="menu==10">
        <list-users-companys></list-users-companys>
    </template>

    <template v-if="menu==3">
        <list-companys></list-companys> 
    </template>

    <template v-if="menu==4">
        <list-sucursals></list-sucursals> 
    </template>
    
    <template v-if="menu==5">
        <systems-subsystems></systems-subsystems>
    </template>

    <template v-if="menu==6">
        <form-register-equipments></form-register-equipments>
    </template>

    <template v-if="menu==7">
        <form-report-activities></form-report-activities>
    </template>

    

   <!--  <template v-if="menu==9">
        <contacts></contacts>
    </template> -->

    <template v-if="menu == 11">
        <notifications-users></notifications-users>
    </template>

    

    {{-- Module Security and Health at Worrk --}}

    <template v-if="menu==24">
        <covid19></covid19>
    </template>

    <template v-if="menu==23">
        <factive-Break></active-Break>
    </template>

    <template v-if="menu==22">
        <format-ats></format-ats>
    </template>

   

     {{-- Module extinguisher --}}
    
     <template v-if="menu==28">
        <form-register-extinguisher></form-register-extinguisher>
    </template>
    <template v-if="menu==29">
        <equipment-extinguisher></equipment-extinguisher>
    </template>
    <template v-if="menu==30">
        <information-type-extinguisher></information-type-extinguisher>
    </template>
    <template v-if="menu==31">
        <form-report-extinguisher></form-report-extinguisher>
    </template>
    
    <template v-if="menu==32">
        <activities-maintenance-support></activities-maintenance-support>
    </template>
    <template v-if="menu==33">
        <services-extinguisher></services-extinguisher>
    </template>
    <template v-if="menu==34">
        <schedule-extinguisher></schedule-extinguisher>
    </template>
    <template v-if="menu==35">
        <glider-extinguisher></glider-extinguisher>
    </template>
    <template v-if="menu==36">
        <report-equipmet-extinguisher></report-equipmet-extinguisher>
    </template>  

    <template v-if="menu==37">
        <monthly-inspection></monthly-inspection>
    </template>

    <template v-if="menu==38">
        <view-report-activities-extinguisher></view-report-activities-extinguisher>
    </template>
    <template v-if="menu==39">
        <report-activities-extinguisher></report-activities-extinguisher>
    </template>

    <template v-if="menu==40">
        <novelties-activities-extinguisher></novelties-activities-extinguisher>
    </template>
    
    <template v-if="menu==41">
        <notifications-extinguisher></notifications-extinguisher>
    </template>

    {{-- Module Generate and Control of Report --}}

    <template v-if="menu==15">
        <view-generator-report></view-generator-report>
    </template>

    <template v-if="menu==200">
        <view-generator-report-annual></view-generator-report-annual>
    </template>
    

  

    <template v-if="menu==16">
        <novelties></novelties>
    </template>

    <template v-if="menu==14">
        <novelties-assign-corrective-maintenance></novelties-assign-corrective-maintenance>
    </template>
    
    <template v-if="menu==8">
        <equipment></equipment>
    </template>

    {{-- Module Glider --}}
    
    <template v-if="menu==12">
        <schedule-generate></schedule-generate> 
    </template>
    <template v-if="menu==13">
        <schedule-assign-activities></schedule-assign-activities> 
    </template>
    
   <!--  <template v-if="menu==13">
        <schedule-assign-activities-view></schedule-assign-activities-view> 
    </template> -->
    <template v-if="menu==14">
        <schedule-reassign-activities></schedule-reassign-activities> 
    </template>

   

    {{-- Module Accounting --}}
    
    <template v-if="menu==201">
        <accounting-price></accounting-price>
    </template>

    <template v-if="menu==202">
        <bill-excel></bill-excel>
    </template>
    {{-- Module extinguishers --}}
    
    <template v-if="menu==203">
        
    </template>

    {{-- Module Client --}}

    <template v-if="menu==17">
        <view-equipments></view-equipments>
    </template>

    <template v-if="menu==18">
        <view-report-activities></view-report-activities>
    </template>


    <template v-if="menu==19">
        <novelties-view-client></novelties-view-client>
    </template>

    <template v-if="menu==20">
        <view-certificated-visit></view-certificated-visit>
    </template>

    <template v-if="menu==21">
        <view-client-report-generated></view-client-report-generated>
    </template>

    
    


    

    {{-- Module Efficiency Pump --}}

    <template v-if="menu==26">
        <template-efficiency-pumps></template-efficiency-pumps>
    </template>

    <template v-if="menu==27">
        <reports-efficiency-pumps></reports-efficiency-pumps>
    </template>

    {{-- Module Statics --}}
    <template v-if="menu==25">
        <ipmstatics-sumary></ipmstatics-sumary>
    </template>

    {{-- Module Cost and Budget --}}

    <template v-if="menu==42">
        <cost-and-budget-form></cost-and-budget-form'>
    </template>

    <template v-if="menu==43">
        <cost-and-buget-table></cost-and-buget-table'>
    </template> 


    {{-- Module Firefigthers --}}


    <template v-if="menu==59">
        <station-firefighters></station-firefighters>
    </template>
    
    <template v-if="menu==60">
        <client-firefighters></client-firefighters>
    </template>

    <template v-if="menu==61">
        <users-firefighters></users-firefighters>
    </template>

    <template v-if="menu==62">
        <forms-report-activities-firefighters></forms-report-activities-firefighters>
    </template>

    <template v-if="menu==63">
        <cronogram-firefighters></cronogram-firefighters>
    </template>

    <template v-if="menu==64">
        <visitreport-firefighters></visitreport-firefighters>
    </template>

    <template v-if="menu==65">
        <activityreport-firefighters></activityreport-firefighters>
    </template>

    <template v-if="menu==66">
        <reportgenerator-firefighters></reportgenerator-firefighters>
    </template>

    <template v-if="menu==67">
        <certificate-firefighters></certificate-firefighters>
    </template>

    {{-- Module Trainig IPM-X --}}

    <template v-if="menu==53">
        <admin-platform></admin-platform>
    </template>

    <template v-if="menu==54">
        <operational-platform></operational-platform>
    </template>

    <template v-if="menu==55">
        <control-platform></control-platform>
    </template>

    {{-- Module Trainig Corporate --}}

    <template v-if="menu==56">
        <admin-corporate></admin-corporate>
    </template>

    <template v-if="menu==57">
        <operational-corporate></operational-corporate>
    </template>

    <template v-if="menu==58">
        <control-corporate></control-corporate>
    </template>

    {{-- Module Documents --}}

    <template v-if="menu==44">
        <process-quality></process-quality>
    </template>

    <template v-if="menu==45">
        <process-commercial></process-commercial>
    </template>

    <template v-if="menu==46">
        <process-supplyandinstallation></process-supplyandinstallation>
    </template>

    <template v-if="menu==47">
        <process-design></process-design>
    </template>

    <template v-if="menu==48">
        <process-strategic></process-strategic>
    </template>

    <template v-if="menu==49">
        <process-humantalent></process-humantalent>
    </template>

    <template v-if="menu==50">
        <process-shopping></process-shopping>
    </template>

    <template v-if="menu==51">
        <process-sgc></process-sgc>
    </template>

    <template v-if="menu==52">
        <process-sg_sst></process-sg_sst>
    </template>

    {{-- Module Inventory --}}

    <template v-if="menu==68">
        <inventory-module></inventory-module>
    </template>

    <template v-if="menu==69">
        <form-inventory></form-inventory>
    </template>

@endsection