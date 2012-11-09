<?php Section::inject('page_title', 'A Technology Marketplace That Everybody Loves') ?>
<?php Section::inject('no_page_header', true) ?>
<div class="hero-unit">
  <h1>
    EasyBid
    <small>A Technology Marketplace That Everybody Loves</small>
  </h1>
</div>
<div class="row-fluid">
  <div class="span6 well">
    <h5>For Small Business</h5>
    <p class="main-description">
      Create a simple online profile and begin bidding
      on <a href="<?php echo Jade\Dumper::_text( route('projects') ); ?>">projects</a>.
      If you're selected to work on one, we'll walk you through the government registration process.
    </p>
    <a class="btn btn-warning btn-large" href="<?php echo Jade\Dumper::_text( route('new_vendors') ); ?>" data-pjax="data-pjax">Register as a Business</a>
  </div>
  <div class="span6 well">
    <h5>For Government</h5>
    <p class="main-description">
      Make great statements of work.
      Browse innovative tech businesses and see their online portfolios.
      Receive and review bids on your projects.
    </p>
    <a class="btn btn-warning btn-large" href="<?php echo Jade\Dumper::_text( route('new_officers') ); ?>" data-pjax="data-pjax">Register as a Government Officer</a>
  </div>
</div>