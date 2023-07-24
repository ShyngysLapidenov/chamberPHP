@extends('layouts.app')
@section('content')
    <div class="msg-popup" id="msg">
        <form>
            <div class="form-heading">
                <img class="close" src="/assets/images/close-icon.png" width="25" onmousedown="closePopUp()">
                <h1>SEND US A QUICK MESSAGE</h1>
            </div>
            <div class="mb-3 form-input">
                <input type="name" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="mb-3 form-input">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3 form-input">
                <input type="phone" class="form-control" id="phone" placeholder="Phone">
            </div>
            <div class="mb-3 form-input">
                <textarea type="phone" class="form-control" id="message" placeholder="Message"></textarea>
            </div>
            <div class="mb-3 form-check form-input">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree to the processing of personal data *</label>
            </div>
            <a class="btn btn-dark" id="submit-btn" onmousedown="successPopUp()">Submit</a>
        </form>
    </div>

    <div class="success-popup" id="scs-pp" onmousedown="closeSuccessPopUp()">
        <div class="success-form">
            <div class="success-heading">
                <img class="success" src="/assets/images/success-icon.png" width="80">
            </div>
            <div class="success-content">
                <h2>Your message has been sent<br>
                    Our manager will contact you soon</h2>
            </div>
        </div>
    </div>

    <section class="all-news">
  <div class="container">
    <h2 class="all-news-heading"><b>All News</b></h2>

    <div class="filter-block">
      
    <form  class="formNews" action="/news" method="GET">
      <div class="input-group date"  id="datepicker">
        <input type="text" name="from" class="filter form-control" placeholder="From">
        <span class="input-group-append"></span>
      </div>
      

      <div class="input-group date " id="datepicker2">
        <input type="text" name="to" class="filter form-control" placeholder="To">
        <span class="input-group-append"></span>
        
      </div>
      <button type="submit" class=" btn btn-dark newsButton" id="newsButton" >Apply</button>
    </form>
    </div>
  


    <div class="tab-content container" id="myTabContent">
    <div class="news-list tab-pane fade show active"  id="list1" role="tabpanel" aria-labelledby="list-tab1">            
         @foreach($news as $item)
                    <div class="news-row row" onclick="location.href = '{{ route('news_detail', ['id' => $item['id']]) }}'">
                        <div class="news-left col-md-2">
                            <img class="news-icon2" src="/assets/images/news.png" width="60%">
                        </div>
                        <div class="news-text col-md-10">
                            <div class="news-release">
                                <hr class="blue-line">
                                <h7>PRESS RELEASE</h7>
                            </div>
                            <h5>
                                {{ $item['title'] }}</h5>
                            <p>{{ date('d M Y', strtotime($item['date'])) }}</p>
                        </div>
                    </div>
                    @endforeach
				</div>
</div>
            </div>
    </section>
	{{ $news->links('vendor.pagination.custom') }}
@endsection
@push('script')

<script src="/assets/js/moment-with-locales.min.js"></script>
<script src="/assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
  const c = document.querySelector('.container')
  const indexs = Array.from(document.querySelectorAll('.index'))
  let cur = -1
  indexs.forEach((index, i) => {
    index.addEventListener('click', (e) => {
      // clear
      c.className = 'container'
      void c.offsetWidth; // Reflow
      c.classList.add('open')
      c.classList.add(`i${i + 1}`)
      if (cur > i) {
        c.classList.add('flip')
      }
      cur = i
    })
  })
</script>

<script type="text/javascript">
  $(function() {
    $('#datepicker').datepicker();
  });
  $(function() {
    $('#datepicker2').datepicker();
  });
</script>
@endpush