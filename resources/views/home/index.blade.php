@extends('layouts.master')


@section('title')
 		Vaaidya Home
@stop

@section('content')
 <div class="jumbotron">
      <div class="container">
        <h1>Vaaidya - the record keeper!</h1>
        <p>This website is a tool for doctors to keep track of their diagnoses for their patients. Use the site to create patients, edit patient details, add notes for patients, edit notes and easily retreive patient notes.</p>
       
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Keep track of Patients</h2>
          <p>Add your patients to the database and you can edit/search for them - coming soon - the site can email your patients when you update their status of information. </p>
          
        </div>
        <div class="col-lg-4">
          <h2>Add and edit notes for your patients</h2>
          <p>As you add patients, you can also keep track of their progress by adding notes periodically. The notes are only visible to the doctor and are confidential - coing soon - ability to share select notes with your patients (requires Patient email address)</p>
         
       </div>
        <div class="col-lg-4">
          <h2>More tools coming up..</h2>
          <p>Ability for the patient to log in and check all his records from various doctors in one place, communication between patient and doctor via site (So you need not disclose personal contact details), many more..</p>
         
        </div>
      </div>
      </div>

@stop