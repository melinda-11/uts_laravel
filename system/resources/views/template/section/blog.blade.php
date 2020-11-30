    <div id="tf-blog">
        <div class="container"> <!-- container -->
            <div class="section-header">
                <h2>Latest from the <span class="highlight"><strong>Blog</strong></span></h2>
                <h5><em>Tempat Wisata Kalbar Favorit Traveler</em></h5>
                <div class="fancy"><span><img src="{{url('public')}}/img/logo-wisata.png"  alt="..."></span></div>
            </div>
        </div>

        <div id="blog-post" class="gray-bg"> <!-- fullwidth gray background -->
            <div class="container"><!-- container -->

                <div class="row"> <!-- row -->
                    <div class="card-header">
                        Data Tempat Wisata Kalbar
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th> 
                                <th>Judul</th>
                                <th>Deskripsi</th>
                             
                            </thead>
                            <tbody>
                                @foreach($list_artikel as $artikel)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$artikel->judul}}</td>
                                        <td>{{$artikel->deskripsi}}</td>
                                    </tr>

                                @endforeach

                            </tbody>                            
                        </table>
                        <!-- Blog Comments -->
                    <div class="comments1">
                        <div class="well">
                            <h4>Tinggalkan Komentar:</h4>
                            <form>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                            </div>
                        <hr>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="images/avatar1.png" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Lidia Fita Sari
                                    <small>November 29, 2020 at 9:30 PM</small>
                                </h4>
                                Lokasinya ga jauh dari rumah saya beneran pantai temajuk ini sangat menarik untuk dikunjungi.
                            </div>
                        </div>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="images/avatar1.png" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Melda Richwana
                                    <small>November 29, 2020 at 10:30 PM</small>
                                </h4>
                                Bagus sekali tempat wisata ini saya jadi ingin berlibur.
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div> <!-- end fullwidth gray background -->
    </div>