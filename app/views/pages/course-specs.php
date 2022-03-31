<!DOCTYPE html>
<html style="font-size: 16px">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="Basic information" />
    <meta name="description" content="" />
    <meta name="page_type" content="np-template-header-footer-from-plugin" />
    <title>course specs</title>
    <link
      rel="stylesheet"
      href="../../../public/css/nicepage.css"
      media="screen"
    />
    <link
      rel="stylesheet"
      href="../../../public/css/course-specs.css"
      media="screen"
    />
    <script
      class="u-script"
      type="text/javascript"
      src="../../../public/js/jquery.js"
      defer=""
    ></script>
    <script
      class="u-script"
      type="text/javascript"
      src="../../../public/js/nicepage.js"
      defer=""
    ></script>
    <meta name="generator" content="Nicepage 4.6.5, nicepage.com" />
    <link
      id="u-theme-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
    />
    <link
      id="u-page-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i"
    />

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "../../../images/logo.png",
        "sameAs": []
      }
    </script>
    <meta name="theme-color" content="#478ac9" />
    <meta property="og:title" content="course specs" />
    <meta property="og:type" content="website" />
  </head>
  <body class="u-body u-xl-mode">
    <header
      class="u-gradient u-header u-header"
      id="sec-f4f6"
      data-animation-name=""
      data-animation-duration="0"
      data-animation-delay="0"
      data-animation-direction=""
    >
      <div class="u-clearfix u-sheet u-sheet-1">
        <a
          href="https://nicepage.com"
          class="u-image u-logo u-image-1"
          data-image-width="654"
          data-image-height="194"
        >
          <img
            src="../../../images/logo.png"
            class="u-logo-image u-logo-image-1"
          />
        </a>
        <a href="https://nicepage.com/c/gallery-html-templates" class="u-border-none u-btn u-button-style u-custom-color-1 u-custom-font u-font-pt-sans u-hover-custom-color-1 u-btn-1" >profile</a >
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" target="_blank" data-type="YouTube" title="YouTube" href="" ><span class="u-icon u-social-icon u-social-youtube u-icon-1" ><svg  class="u-svg-link"  preserveAspectRatio="xMidYMin slice"  viewBox="0 0 112 112" style="">
                <use  xmlns:xlink="http://www.w3.org/1999/xlink"  xlink:href="#svg-34f5"></use></svg><svg  class="u-svg-content"  viewBox="0 0 112 112"  x="0"  y="0"  id="svg-34f5">
                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                <path fill="#FFFFFF" d="M74.9,33.3H37.3c-7.4,0-13.4,6-13.4,13.4v18.8c0,7.4,6,13.4,13.4,13.4h37.6c7.4,0,13.4-6,13.4-13.4V46.7 C88.3,39.3,82.3,33.3,74.9,33.3L74.9,33.3z M65.9,57l-17.6,8.4c-0.5,0.2-1-0.1-1-0.6V47.5c0-0.5,0.6-0.9,1-0.6l17.6,8.9 C66.4,56,66.4,56.8,65.9,57L65.9,57z"  ></path></svg ></span>
          </a>
        </div>
      </div>
    </header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-01c0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">
          Basic
          <span style="text-decoration: underline !important">information</span>
        </h2>

        <?php
      include '../../../app/models/UserModel.php';
       class CourseSpecs extends UserModel
       {
      
          public function view()
       {
         $DB=$this->dbh->query('select * from courses');
         $DB->setFetchMode(PDO::FETCH_ASSOC);
         while($row = $DB->fetch())
         {
  ?>
          <ul class="u-align-left u-text u-text-2">
          <li><b>Course Title:</b><?php echo $row['title']?>&nbsp;
        </li>
        <?php
         }
        }
    }
        ?>
       
          <li><b>Course Title:</b> Image Processing&nbsp;</li>
          <li><b>Course Code: </b>AI374</li>
          <li>
            <b>Programme on which the course is given:</b> &nbsp;Bachelor of
            Computer Science&nbsp;<br />
          </li>
          <li><b>Department offering the course:&nbsp; </b>Computer Science</li>
          <li>
            <b>Department teaching the course: </b>Computer Science<b
              >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b
            >
          </li>
          <li>
            <b></b
            ><b
              >Academic year/Level: 2021-2022/ Third
              level&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b
            >
          </li>
          <li>
            <b></b
            ><b
              >Date of specification approval: October
              2021&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b
            >
          </li>
          <li>
            <b
              >Credit Hours:&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b
            ><b
              >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp;</b
            >
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >Lectures:&nbsp; &nbsp;3&nbsp;&nbsp;</b
            >
            <span
              style="
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >hrs / week</span
            ><b
              style="
                font-size: 1.875rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
            ></b>
            <span
              style="
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >&nbsp;</span
            >
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >Practical:&nbsp;&nbsp; 2&nbsp;&nbsp;
            </b>
            <span
              style="
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >hrs / week</span
            ><b
              style="
                font-size: 1.875rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b
            >
          </li>
          <li>
            <b
              style="
                font-size: 1.875rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >Total: 5
            </b>
            <span
              style="
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >hrs / week</span
            ><b
              style="
                font-size: 1.875rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
            ></b>
            <span
              style="
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >&nbsp;</span
            >
          </li>
          <li>
            <span
              style="
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
            ></span
            ><b
              style="
                font-size: 1.875rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >Course Prerequisite: CSC390 Computer Graphics I</b
            >
            <span
              style="
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >&nbsp;</span
            >
          </li>
          <li>
            <span
              style="
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
            ></span
            ><b
              style="
                font-size: 1.875rem;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
              "
              >Course coordinator:&nbsp; Prof. Alaa Hamdy&nbsp; &nbsp; &nbsp;
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b
            >
          </li>
        </ul>
        <a
          href="specs-1.html"
          data-page-id="915315693"
          class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1"
          >NEXT</a
        >
      </div>
    </section>



    <footer
      class="u-align-center u-clearfix u-footer u-grey-80 u-footer"
      id="sec-9d69"
    >
      <div class="u-clearfix u-sheet u-sheet-1">
        <h5 class="u-align-left u-text u-text-1"></h5>
        <p class="u-align-left u-large-text u-text u-text-variant u-text-2">
          Contact Us<br />
          <br /><i></i>KM 28 Cairo – Ismailia Road Ahmed Orabi District, Cairo –
          Egypt<i></i>MIU Email: miu@miuegypt.edu.eg<i></i>MIU E-Learning Email:
          e-learning@miuegypt.edu.eg<i></i>MIU Hotline: 19-MIU / 19648
        </p>
        <h5 class="u-align-left u-text u-text-3">Faculties Link​​s</h5>
        <ul
          class="u-align-left u-small-text u-text u-text-variant u-text-white u-text-4"
        >
          <li>
            <span style="font-size: 1.5rem">
              <a
                href="https://www.miuegypt.edu.eg/academics/faculty-of-alsun"
                class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                >Alsun
              </a>
            </span>
          </li>
          <li>
            <a
              href="https://www.miuegypt.edu.eg/academics/faculty-of-computer-science-2"
              class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
              >Computer Science
            </a>
          </li>
          <li>
            <a
              href="https://www.miuegypt.edu.eg/academics/faculty-of-mass-communication/"
              class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3"
              >Mass Communication</a
            >
          </li>
          <li>
            <a
              href="https://www.miuegypt.edu.eg/academics/faculty-of-business-2/"
              class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4"
              >Business Administration</a
            >
          </li>
        </ul>
        <ul class="u-align-left u-small-text u-text u-text-variant u-text-5">
          <li>
            <a
              href="https://www.miuegypt.edu.eg/academics/faculty-of-oral/"
              class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-5"
              >Oral Dental Medicine</a
            >
          </li>
          <li>
            <a
              href="https://www.miuegypt.edu.eg/academics/faculty-of-pharmacy-2/"
              class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-6"
              >Pharmacy</a
            >
          </li>
          <li>
            <a
              href="https://www.miuegypt.edu.eg/academics/faculty-of-architecture/"
              class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-7"
              >Engineering - Architecture</a
            >
          </li>
          <li>
            <a
              href="specs-3.html"
              data-page-id="13208308"
              class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-8"
              >NEXT</a
            >
          </li>
        </ul>
      </div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a
        class="u-link"
        href="https://nicepage.com/website-templates"
        target="_blank"
      >
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span> </a
      >.
    </section>
  </body>
</html>
