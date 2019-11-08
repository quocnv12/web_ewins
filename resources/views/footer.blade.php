<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-4">
            <h2 class="footer-heading mb-4">Về Chúng Tôi</h2>
            @foreach ($infocompany as $row)
              <p style="font-size: 14px"><i class="fas fa-user-alt"></i> {{ $row->name }}</p>
              <p style="font-size: 14px"><i class="far fa-address-book"></i> Mã số thuế: {{ $row->masothue }}</p>
              <p style="font-size: 14px" ><i class="far fa-address-book"></i> {{ $row->phone }}</p>
              <p style="font-size: 14px" ><i class="fas fa-envelope fa-fw"></i> {{ $row->email }}</p>
            @endforeach
            
          </div>
          <div class="col-md-4 ml-auto" style="margin-left:0 !important">
            <h2 class="footer-heading mb-4">Dịch Vụ</h2>
            <ul class="list-unstyled" style="font-size: 14px">
              @foreach ($cate_service as $item)
                <li><a href=""> >> {{ $item->name }}</a></li>
              @endforeach
             
              
            </ul>
          </div>
          <div class="col-md-4">
            <h2 class="footer-heading mb-4">Hỗ Trợ</h2>
            <ul class="list-unstyled" style="font-size: 14px">
                @foreach ($support as $item)
                      <li><a href="{{ $item->link }}"> >> {{ $item->title }}</a></li>
                @endforeach
              
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <h2 class="footer-heading mb-4">Sản Phẩm Dịch Vụ của Talent Wins</h2>
        <ul class="list-unstyled" style="font-size: 14px">
          @foreach ($product as $row)
                <li><a href="{{ $row->link }}"> >> {{ $row->name }}</a></li>
                {{-- <li><a href="#"> >> Website Tuyển Dụng Việc Làm IT DevJob</a></li>
                <li><a href="#"> >> Dịch vụ Thiết kế website Web88.vn</a></li>
                <li><a href="#"> >> Website tuyển dung việc làm Topcarreer.co/TotalJobs.vn/Timviecngay.vn</a></li>
                <li><a href="#"> >> Website việc làm và khởi nghiệp cho Sinh Viên Ytalent.vn</a></li> --}}
          @endforeach
         
        </ul>

      </div>
    </div>
    <hr>
    <div class="row  text-center">
      <div class="col-md-12">
        <div class="border-top pt-2">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> | Designed by Talent Wins 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>

    </div>
  </div>
</footer>