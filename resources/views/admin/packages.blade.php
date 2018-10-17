@extends('layouts.app')

@section('content')

  <div class="card-header">Dashboard - Packages page</div>
  <div class="card-body">
    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Head Section</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="packages-head-title" class="form-control section-title" value="OUR PLANS. SIMPLE."
                  data-type="text" data-page="packages" data-placement="s1h">
              </div>
              <div class="form-group">
                Text: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                  data-type="text" data-page="packages" data-placement="s1p"
                >We offer three plans that allow for 15 vector artworks over a period of 30 days. Where they differ is in how fast you would like the vector artworks to be available.</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Package: Rush</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="packages-head-title" class="form-control section-title" value="RUSH"
                  data-type="text" data-page="packages" data-placement="p1title">
              </div>
              <div class="form-group">
                Price (in USD): <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="30"
                data-type="text" data-page="packages" data-placement="p1price">
              </div>
              <div class="form-group">
                Timetable: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="Completed within 24 hours"
                  data-type="text" data-page="packages" data-placement="p1timetable">
              </div>
              <div class="form-group">
                Corrections: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="Two corrections"
                  data-type="text" data-page="packages" data-placement="p1corrections">
              </div>
              <div class="form-group">
                Export: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="Export in different file formats"
                  data-type="text" data-page="packages" data-placement="p1export">
              </div>
              <div class="form-group">
                Support: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="Dedicated online support"
                  data-type="text" data-page="packages" data-placement="p1support">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Package: Standard</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="packages-head-title" class="form-control section-title" value="STANDARD"
                  data-type="text" data-page="packages" data-placement="p2title">
              </div>
              <div class="form-group">
                Price (in USD): <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="20"
                  data-type="text" data-page="packages" data-placement="p2price">
              </div>
              <div class="form-group">
                Timetable: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="Completed within 48 hours"
                  data-type="text" data-page="packages" data-placement="p2timetable">
              </div>
              <div class="form-group">
                Corrections: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="Two corrections"
                  data-type="text" data-page="packages" data-placement="p2corrections">
              </div>
              <div class="form-group">
                Export: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="Export in different file formats"
                  data-type="text" data-page="packages" data-placement="p2export">
              </div>
              <div class="form-group">
                Support: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="Email support"
                  data-type="text" data-page="packages" data-placement="p2support">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Package: Basic</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                Title: <input type="text" name="packages-head-title" class="form-control section-title" value="BASIC"
                  data-type="text" data-page="packages" data-placement="p3title">
              </div>
              <div class="form-group">
                Price (in USD): <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="10"
                  data-type="text" data-page="packages" data-placement="p3price">
              </div>
              <div class="form-group">
                Timetable: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="Completed within 72 hours"
                  data-type="text" data-page="packages" data-placement="p3timetable">
              </div>
              <div class="form-group">
                Corrections: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="One corrections"
                  data-type="text" data-page="packages" data-placement="p3corrections">
              </div>
              <div class="form-group">
                Support: <input type="text" name="landing-page-text" id="packages-page-text" class="form-control" value="Email support"
                  data-type="text" data-page="packages" data-placement="p3support">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>FAQ</h2></div>
          <div class="card-body">
            <div class="mt-4">

              <div class="form-group">
                <div class="form-group">
                  Question: <input type="text" name="packages-head-title" class="form-control section-title" value="HOW LONG ARE YOUR PLANS?"
                    data-type="text" data-page="packages" data-placement="faqq1">
                </div>
                <div class="form-group">
                  Answer: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                    data-type="text" data-page="packages" data-placement="faqa1"
                  >Wevector plans are valid for 30 days or 15 artworks from the moment they are purchased. You are free to choose when and how many vector artworks you need over that period of time.</textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="form-group">
                  Question: <input type="text" name="packages-head-title" class="form-control section-title" value="CAN I SWITCH PLANS?"
                    data-type="text" data-page="packages" data-placement="faqq2">
                </div>
                <div class="form-group">
                  Answer: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                    data-type="text" data-page="packages" data-placement="faqa2"
                  >At the moment you cannot switch between plans.</textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="form-group">
                  Question: <input type="text" name="packages-head-title" class="form-control section-title" value="DO YOU OFFER ANNUAL PLANS?"
                    data-type="text" data-page="packages" data-placement="faqq3">
                </div>
                <div class="form-group">
                  Answer: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                    data-type="text" data-page="packages" data-placement="faqa3"
                  >Yes. We have many years of experience with clients that have a continuous need to vector artworks. Annual plans benefit from dedicated teams and offer higher level of flexibility. Contact our customer service at hello@wevector.io to hear how we can help you.</textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="form-group">
                  Question: <input type="text" name="packages-head-title" class="form-control section-title" value="CAN YOU COMPLETE MORE THEN 15 VECTOR ARTWORKS?"
                    data-type="text" data-page="packages" data-placement="faqq4">
                </div>
                <div class="form-group">
                  Answer: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                    data-type="text" data-page="packages" data-placement="faqa4"
                  >Yes. If you need a higher volume of vector artworks, we would like you to send us an email at hello@wevector.io. Our customer service will create a custom plan to suit your needs.</textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="form-group">
                  Question: <input type="text" name="packages-head-title" class="form-control section-title" value="WHAT IS MEANT BY CORRECTION?"
                    data-type="text" data-page="packages" data-placement="faqq5">
                </div>
                <div class="form-group">
                  Answer: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                    data-type="text" data-page="packages" data-placement="faqa5"
                  >Once your vector artwork is available for review, depending on your plan, you are able to modify: - colours - orientation (portrait or landscape) - size of artwork elements - position of elements</textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="form-group">
                  Question: <input type="text" name="packages-head-title" class="form-control section-title" value="WHERE CAN I FIND MY VECTOR ARTWORKS?"
                    data-type="text" data-page="packages" data-placement="faqq6">
                </div>
                <div class="form-group">
                  Answer: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                    data-type="text" data-page="packages" data-placement="faqa6"
                  >Once you purchase one of our plans, you will get access to your dedicated space on Dropbox. Everything will be stored there for your convenience.</textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="form-group">
                  Question: <input type="text" name="packages-head-title" class="form-control section-title" value="DO YOU WORK ON WEEKENDS?"
                    data-type="text" data-page="packages" data-placement="faqq7">
                </div>
                <div class="form-group">
                  Answer: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                    data-type="text" data-page="packages" data-placement="faqa7"
                  >No. Weekends are reserved for fun, family & friends. Vector artwork requests received outside of business hours will be completed next business day.</textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="form-group">
                  Question: <input type="text" name="packages-head-title" class="form-control section-title" value="WHAT IS DEDICATED ONLINE SUPPORT?"
                    data-type="text" data-page="packages" data-placement="faqq8">
                </div>
                <div class="form-group">
                  Answer: <textarea name="landing-page-text" id="packages-page-text" class="form-control" cols="30" rows="5"
                    data-type="text" data-page="packages" data-placement="faqa8"
                  >Dedicated online support provides unlimited access to our customer service in order to ensure you reach your goals as fast as possible. Dedicated online support is only available during business hours.</textarea>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <i class="far fa-share-square float-right mr-5 send" data-type="packages"> Save</i>

  </div>

@endsection
