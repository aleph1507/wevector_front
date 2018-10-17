<div class="card-body">
  <form class="" action="{{route('content')}}" method="post" enctype="multipart/form-data">
    <div class="mt-4">
      <div class="admin-section">
        <div class="card">
          <div class="card-header"><h2>Footer</h2></div>
          <div class="card-body">
            <div class="mt-4">
              <div class="form-group">
                <span class="mb-5">Column 1:</span>
                <div class="upload-btns mt-5">
                  <div class="row">
                    <div class="col-md-6 col-sm-12">
                      <img src="{{asset('img/footer/we_vector_logo.svg')}}" alt="Logo" class="img-fluid" id="fi1">
                    </div>
                    <div class="col-md-5 col-sm-12 form-group nlp">
                      <label class="btn btn-lg btn-outline-dark input-btn">
                        <input type="file" class="upload-input" name="upfile"
                          data-type="img" data-page="footer" data-placement="fi1">
                        <i class="fas fa-cloud-upload-alt"></i> Change Logo
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <span class="mt-5 mb-2" style="display:block;">Column 2:</span>
                <div class="form-group">
                  Title: <input type="text" name="footer-head-title" class="form-control section-title" value="get in touch"
                    data-type="text" data-page="footer" data-placement="fc2h1">
                </div>
                <div class="form-group">
                  Text: <textarea name="footer-page-text" id="footer-page-text" class="form-control" cols="30" rows="5"
                    data-type="text" data-page="footer" data-placement="fc2p1"
                  >Would you like to hear more about our service and how we can help you? Please get in touch and let’s have a talk about your challenges.</textarea>
                </div>
                <div class="form-group">
                  Phone: <input type="text" name="footer-page-text" id="footer-page-text" class="form-control" value="Office +389 2310 7005"
                    data-type="text" data-page="footer" data-placement="fc2phone1">
                </div>
                <div class="form-group">
                  Mail: <input type="text" name="footer-page-text" id="footer-page-text" class="form-control" value="hello@wevector.io"
                    data-type="link" data-page="footer" data-placement="fc2mail1">
                </div>
              </div>

              <div class="form-group">
                <span class="mt-5 mb-2" style="display:block;">Column 3:</span>
                <div class="form-group">
                  Title: <input type="text" name="footer-head-title" class="form-control section-title" value="address"
                    data-type="text" data-page="footer" data-placement="fc3h1">
                </div>
                <div class="form-group">
                  Line 1: <input type="text" class="form-control" value="Wevector"
                    data-type="text" data-page="footer" data-placement="fc2l1">
                </div>
                <div class="form-group">
                  Line 2: <input type="text" class="form-control" value="Nikola Trimpare 33, 1-4 "
                    data-type="text" data-page="footer" data-placement="fc2l2">
                </div>
                <div class="form-group">
                  Line 3: <input type="text" class="form-control" value="1000 Skopje Macedonia"
                    data-type="text" data-page="footer" data-placement="fc2l3">
                </div>
              </div>

              <div class="form-group">
                <span class="mt-5 mb-2" style="display:block;">Column 4:</span>
                <div class="form-group">
                  Facebook Link: <input type="text" class="form-control" value="http://www.facebook.com"
                    data-type="link" data-page="footer" data-placement="fc4link1">
                </div>
                <div class="form-group">
                  Linkedin Link: <input type="text" class="form-control" value="http://www.linkedin.com"
                    data-type="link" data-page="footer" data-placement="fc4link2">
                </div>
                <div class="form-group">
                  Pinterest Link: <input type="text" class="form-control" value="http://www.pinterest.com"
                    data-type="link" data-page="footer" data-placement="fc2link3">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <hr>
    <i class="far fa-share-square float-right mr-5 send" data-type="footer"> Save</i>
  </form>
</div>
