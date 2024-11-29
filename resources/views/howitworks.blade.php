@extends('layouts.app')

@section('title', 'Home')

@section('content')



<div class="aboutimage">
    <img src="{{ asset('images/howitworks.jpeg') }}" width="100%" style="margin-top: 60px;"/>
</div>
                <div class="howitworks">
          <h3 class="howitworks">How Does It Work</h3>
          <p>
          Automobile, Tuk Tuk, Boda Boda and properties both residential, commercial, and governmental systems will breakdown, but they do not have to break your budget or bank. Mr.KIM professional service providers got you covered when such breakdown unexpectedly bringing your life to a Screeching halt. With Mr.KIM APP, you know exactly what to do when things go wrong. It’s as simple as:
          </p>

          <div class="howitcontent">
            <div class="">
              <Image
                src="{{ asset('images/SVG/project.svg') }}"
                width="120px"
                alt="Plus"
                class="imagepl"
              />
              <h4>Telling US About Your Project</h4>
              <p>
                Select a project category that matches your needs. We will ask for
                project description to better match your needs.
              </p>
            </div>
            <div class="ayie">
              <Image
                src="{{ asset('images/SVG/technician.svg') }}"
                width="120px"
                alt="Plus"
                class="imagepl"
              />
              <h4>Getting Matched</h4>
              <p>
                Getting Matched with a Professional Service Provider in Your Area
              </p>
            </div>
            <div class="ayie">
              <Image
                src="{{ asset('images/SVG/techtu.svg') }}"
                width="120px"
                alt="Plus"
                class="imagepl"
              />
              <h4>Getting Connected </h4>
              <p>
                Getting Connected with best professional service provider in your
                Area for your project{" "}
              </p>
            </div>
          </div>
 </div>
@endsection