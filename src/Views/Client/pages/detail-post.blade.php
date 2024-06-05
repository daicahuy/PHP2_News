@extends('layouts.master') @section('content')
<!-- Page Title Start -->
<div class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li>
            <a href="/detail-category/{{ $post['idCategory'] }}">
              {{ $post['nameCategory'] }}
            </a>
          </li>
          <li class="active">{{ $post['title'] }}</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Page title end -->
<!-- 1rd Block Wrapper Start -->
<section class="utf_block_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="single-post">
          <div class="utf_post_title-area">
            <a
              class="utf_post_cat"
              href="/detail-category/{{ $post['idCategory'] }}"
            >
              {{ $post['nameCategory'] }}
            </a>
            <h2 class="utf_post_title">{{ $post['title'] }}</h2>
            <div class="utf_post_meta">
              <span class="utf_post_author">
                By <a href="#!">{{ $post['nameAuthor'] }}</a>
              </span>
              <span class="utf_post_date">
                <i class="fa fa-clock-o"></i>
                {{ $post['date'] }}
              </span>
              <span class="post-hits">
                <i class="fa fa-eye"></i> {{ $post['views'] }}</span
              >
              <span class="post-comment"
                ><i class="fa fa-comments-o"></i>
                <a href="#utf_latest_news_slide" class="comments-link">
                  <span>
                    {{ $post['totalCommentInPost'] ? $post['totalCommentInPost']
                    : 0 }}
                  </span>
                </a>
              </span>
            </div>
          </div>

          <div class="utf_post_content-area">
            <div class="post-media post-audio">
              <blockquote>{{ $post['description'] }}</blockquote>
            </div>

            <div class="entry-content">{!! $post['content'] !!}</div>

            <div class="tags-area clearfix">
              <div class="post-tags">
                @if (!empty($tagsInPost))
                <span>Tags:</span>
                @foreach ($tagsInPost as $tag)
                <a href="#!"># {{ $tag }}</a>
                @endforeach @else
                <span>No Tags</span>
                @endif
              </div>
            </div>

            <div class="share-items clearfix">
              <ul class="post-social-icons unstyled">
                <li class="facebook">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                    <span class="ts-social-title">Facebook</span></a
                  >
                </li>
                <li class="twitter">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                    <span class="ts-social-title">Twitter</span></a
                  >
                </li>
                <li class="gplus">
                  <a href="#">
                    <i class="fa fa-google-plus"></i>
                    <span class="ts-social-title">Google +</span></a
                  >
                </li>
                <li class="pinterest">
                  <a href="#">
                    <i class="fa fa-pinterest"></i>
                    <span class="ts-social-title">Pinterest</span></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="related-posts block">
          <h3 class="utf_block_title"><span>Bài viết liên quan</span></h3>
          <div
            id="utf_latest_news_slide"
            class="owl-carousel owl-theme utf_latest_news_slide"
          >
            @foreach ($relatedPostsExceptThisPost as $item)
            <div class="item">
              <div class="utf_post_block_style clearfix">
                <div class="utf_post_thumb">
                  <a href="#">
                    <img
                      class="img-fluid"
                      src="/assets/{{ $item['image'] }}"
                      alt="image new"
                    />
                  </a>
                </div>
                <a
                  class="utf_post_cat"
                  href="/detail-category/{{ $item['idCategory'] }}"
                >
                  Health
                </a>
                <div class="utf_post_content">
                  <h2 class="utf_post_title title-medium">
                    <a href="/detail-post/{{ $item['id'] }}"
                      >{{ $item['title'] }}</a
                    >
                  </h2>
                  <div class="utf_post_meta">
                    <span class="utf_post_date">
                      <i class="fa fa-clock-o"></i>
                      {{ $item['date'] }}
                    </span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Post comment start -->
        <div id="comments" class="comments-area block">
          <h3 class="utf_block_title">
            <span>{{ $post['totalCommentInPost'] }} Bình luận</span>
          </h3>
          <ul class="comments-list">
            <li>
              <div class="comment">
                <img
                  class="comment-avatar pull-left"
                  alt=""
                  src="/assets/client/assets/images/news/user1.png"
                />
                <div class="comment-body">
                  <div class="meta-data">
                    <span class="comment-author">Phú Ngao</span>
                    <span class="comment-date pull-right">15 Jan, 2022</span>
                  </div>
                  <div class="comment-content">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since It has survived not only
                      five centuries, but also the leap into electronic type
                      setting, remaining essentially unchanged.
                    </p>
                  </div>
                  <div class="text-left">
                    <a class="comment-reply" href="#"
                      ><i class="fa fa-share"></i> Trả lời</a
                    >
                  </div>
                </div>
              </div>

              <ul class="comments-reply">
                <li>
                  <div class="comment">
                    <img
                      class="comment-avatar pull-left"
                      alt=""
                      src="/assets/client/assets/images/news/user2.png"
                    />
                    <div class="comment-body">
                      <div class="meta-data">
                        <span class="comment-author">
                          Mờ mười
                          <i class="fa fa-caret-right mx-1"></i>
                          Phú Ngao
                        </span>
                        <span class="comment-date pull-right"
                          >15 Jan, 2022</span
                        >
                      </div>
                      <div class="comment-content">
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and
                          typesetting industry. Lorem Ipsum has been the
                          industry's standard dummy text ever since It has
                          survived not only five centuries, but also the leap
                          into electronic type setting, remaining essentially
                          unchanged.
                        </p>
                      </div>
                      <div class="text-left">
                        <a class="comment-reply" href="#"
                          ><i class="fa fa-share"></i> Trả lời</a
                        >
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="comment last">
                <img
                  class="comment-avatar pull-left"
                  alt=""
                  src="/assets/client/assets/images/news/user1.png"
                />
                <div class="comment-body">
                  <div class="meta-data">
                    <span class="comment-author">Bủ nô</span>
                    <span class="comment-date pull-right">15 Jan, 2022</span>
                  </div>
                  <div class="comment-content">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the industry's
                      standard dummy text ever since It has survived not only
                      five centuries, but also the leap into electronic type
                      setting, remaining essentially unchanged.
                    </p>
                  </div>
                  <div class="text-left">
                    <a class="comment-reply" href="#"
                      ><i class="fa fa-share"></i> Trả lời</a
                    >
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- Post comment end -->

        <!-- Comment Form Start -->
        <div class="comments-form">
          <h3 class="title-normal">Bình luận</h3>
          <form>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea
                    class="form-control required-field"
                    id="message"
                    placeholder="Your Comment"
                    rows="10"
                    required
                  ></textarea>
                </div>
              </div>
            </div>
            <div class="clearfix">
              <button class="comments-btn btn btn-primary" type="submit">
                Gửi bình luận
              </button>
            </div>
          </form>
        </div>
        <!-- Comments form end -->
      </div>

      <div class="col-lg-4 col-md-12">
        <div class="sidebar utf_sidebar_right">
          {{-- follow us --}} @include('components.static.follow-us')
          @include('components.static.popular-news')
          @include('components.static.ads')
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 1rd Block Wrapper End -->
@endsection
