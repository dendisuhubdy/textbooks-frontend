<?php
  function get_list_view_html($book_id, $book) {

    $titleUrl = str_replace(" ", "%20", $book["title"]);

    $output = '';

    $output = $output . '<li class="books__item">';
    $output = $output . '<a href="'  . 'book.php?title=' . $titleUrl . '">';
    $output = $output . '<div class="image"><img src="' . $book["img"] .'" alt="' . $book["title"] . '"></div>';
    $output = $output . '</a>';
    $output = $output . '<h6>' . $book["title"] . '</h6>';
    $output = $output . '</li>';

    return $output;
  }

  function get_list_view_search($book_id, $book) {

    $titleUrl = str_replace(" ", "%20", $book["title"]);

    $output = '';

    $output = $output . '<li class="search-result--content__item">';
    $output = $output . '<a href="'  . 'book.php?title=' . $titleUrl . '">';
    $output = $output . '<div class="image"><img src="' . $book["img"] .'" alt="' . $book["title"] . '"></div>';
    $output = $output . '</a>';
    $output = $output . '<h6>' . $book["title"] . '</h6>';
    $output = $output . '</li>';

    return $output;
  }

  function get_list_view_html_full($book_id, $book) {

    $titleUrl = str_replace(" ", "%20", $book["title"]);

    $output = '';
    $output = $output . '<li class="book--full">';
    $output = $output . '<a href="'  . 'book.php?title=' . $titleUrl . '">';
    $output = $output . '<div class="book--full__item book--full__item--img"><img src="' . $book["img"] .'" alt="' . $book["title"] . '"></div>';
    $output = $output . '<div class="book--full__item book--full__item--description">';
    $output = $output . '<h4>' . $book["title"] . '</h4>';
    $output = $output . '<h6>Authors &nbsp;&nbsp;&nbsp;: ' . $book["authors"] . '</h6>';
    $output = $output . '<h6>Publisher : ' . $book["publisher"] . '</h6>';
    $output = $output . '<h6>ISBN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' . $book["ISBN-10"] . '</h6>';
    $output = $output . '</div>';
    $output = $output . '</a>';
    $output = $output . '</li>';

    return $output;
  }



  $books = array();

  $books[10878656787407986] = array(
    "id" => "10878656787407986",
    "title" => "Campbell Biology (9th Edition)",
    "edition" => "9th Edition",    
    "img" => "img/bookcover/RJ10878656787407986.png",
    "authors" => "Jane B. Reece, Lisa A. Urry, Michael L. Cain, Steven A. Wasserman, Peter V. Minorsky, Robert B. Jackson",
    "description" => "Campbell BIOLOGY is the unsurpassed leader in introductory biology. The text’s hallmark values—accuracy, currency, and passion for teaching and learning—have made it the most successful college introductory biology book for eight consecutive editions.",
    "pages" => "1464",
    "publisher" => "Benjamin Cummings; 9 edition (October 7, 2010)",
    "language" => "English",
    "ISBN-10" => "0321558235",
    "ISBN-13" => "978-0321558237",
    "category" => "biology"
  );

  $books[10878656787294986] = array(
    "id" => "10878656787294986",
    "title" => "Chemistry: The Central Science (13th Edition)",
    "edition" => "13th Edition",    
    "img" => "img/bookcover/BT10878656787294986.png",
    "authors" => "Theodore E. Brown, H. Eugene H LeMay, Bruce E. Bursten, Catherine Murphy, Patrick Woodward, Matthew E. Stoltzfus",
    "description" => "<p>Unrivaled problems, notable scientific accuracy and currency, and remarkable clarity have made Chemistry: The Central Science the leading general chemistry text for more than a decade. Trusted, innovative, and calibrated, the text increases conceptual understanding and student success in general chemistry by building on the expertise of the dynamic author team of leading researchers and award-winning professors.</p>
   
      <p>The new Thirteenth Edition builds on the Twelfth Edition’s major revision, in which every word and piece of art was scrutinized by all the authors to increase its effectiveness. Placing a greater emphasis on research, this edition is more tightly integrated with MasteringChemistry, the leading online homework, tutorial, and assessment program— resulting in an unparalleled teaching and learning package that personalizes learning and coaches students toward understanding and mastery of tough chemistry topics.</p>",
    "pages" => "1248",
    "publisher" => "Prentice Hall; 13 edition (January 11, 2014)",
    "language" => "English",
    "ISBN-10" => "0321910419",
    "ISBN-13" => "978-0321910417",
    "category" => "chemistry"
  );

  $books[10893057387294986] = array(
    "id" => "10893057387294986",
    "title" => "Calculus: An Intuitive and Physical Approach (Second Edition) (Dover Books on Mathematics)",
    "edition" => "",    
    "img" => "img/bookcover/KM10893057387294986.png",
    "authors" => "Morris Kline",
    "description" => "<p>Application-oriented introduction relates the subject as closely as possible to science. In-depth explorations of the derivative, the differentiation and integration of the powers of x, and theorems on differentiation and antidifferentiation lead to a definition of the chain rule and examinations of trigonometric functions, logarithmic and exponential functions, techniques of integration, polar coordinates, much more. Clear-cut explanations, numerous drills, illustrative examples. 1967 edition. Solution guide available upon request.</p>",
    "pages" => "960",
    "publisher" => "Dover Publications; Second Edition edition (June 19, 1998)",
    "language" => "English",
    "ISBN-10" => "0486404536",
    "ISBN-13" => "978-0486404530",
    "category" => "mathematics"
  );

  $books[10493457587228986] = array(
    "id" => "10493457587228986",
    "title" => "The Elegant Universe: Superstrings, Hidden Dimensions, and the Quest for the Ultimate Theory",
    "edition" => "",    
    "img" => "img/bookcover/GB10493457587228986.png",
    "authors" => "Brian Greene",
    "description" => "<p>Brian Greene, one of the world's leading string theorists, peels away layers of mystery to reveal a universe that consists of eleven dimensions, where the fabric of space tears and repairs itself, and all matter―from the smallest quarks to the most gargantuan supernovas―is generated by the vibrations of microscopically tiny loops of energy. The Elegant Universe makes some of the most sophisticated concepts ever contemplated accessible and thoroughly entertaining, bringing us closer than ever to understanding how the universe works.</p>",
    "pages" => "464",
    "publisher" => "W. W. Norton & Company; 2 edition (October 11, 2010)",
    "language" => "English",
    "ISBN-10" => "9.78039E+12",
    "ISBN-13" => "978-0393338102",
    "category" => "physics"
  );

  $books[10544402789478986] = array(
    "id" => "10544402789478986",
    "title" => "Molecular Biology of the Cell, 5th Edition",
    "edition" => "5th Edition",    
    "img" => "img/bookcover/AB10544402789478986.png",
    "authors" => "Bruce Alberts, Alexander Johnson, Julian Lewis, Martin Raff, Keith Roberts, Peter Walter ",
    "description" => "<p>For nearly a quarter century Molecular Biology of the Cell has been the leading cell biology textbook. This tradition continues with the new Fifth Edition, which has been completely revised and updated to describe our current, rapidly advancing understanding of cell biology. To list but a few examples, a large amount of new material is presented on epigenetics; stem cells; RNAi; comparative genomics; the latest cancer therapies; apoptosis (now its own separate chapter); and cell cycle control and the mechanics of M phase (now integrated into one chapter).</p>

     <p>The hallmark features of Molecular Biology of the Cell have been retained, such as its consistent and comprehensive art program, clear concept headings, and succinct section summaries. Additionally, in response to extensive feedback from readers, the Fifth Edition now includes several new features.</p>",
    "pages" => "1392",
    "publisher" => "Garland Science; 5th edition (November 16, 2007)",
    "language" => "English",
    "ISBN-10" => "0815341059",
    "ISBN-13" => "978-0815341055",
    "category" => "biology"
  );

  $books[10493457864228736] = array(
    "id" => "10493457864228736",
    "title" => "Biology: Concepts and Connections",
    "edition" => "6th Edition",    
    "img" => "img/bookcover/CN10493457864228736.png",
    "authors" => "Neil A. Campbell, Jane B. Reece, Martha R. Taylor, Eric J. Simon, Jean L. Dickey",
    "description" => "<p>Biology: Concepts & Connections, 6/e continues to be the most accurate, current, and pedagogically effective  book on the market. This extensive revision builds upon the book’s best-selling success with exciting new and updated features. KEY TOPICS: THE LIFE OF THE CELL, The Chemical Basis of Life, The Molecules of Cells, A Tour of the Cell, The Working Cell, How Cells Harvest Chemical Energy, Photosynthesis: Using Light to Make Food, The Cellular Basis of Reproduction and Inheritance, Patterns of Inheritance, Molecular Biology of the Gene, How Genes Are Controlled, DNA Technology and Genomics, How Populations Evolve, The Origin of Species, Tracing Evolutionary History,  The Origin and Evolution of Microbial Life: Prokaryotes and Protists, Plants, Fungi, and the Colonization of Land,  The Evolution of Invertebrate Diversity,The Evolution of Vertebrate Diversity, Unifying Concepts of Animal Structure and Function,  Nutrition and Digestion, Gas Exchange, Circulation, The Immune System, Control of Body Temperature and Water Balance,  Hormones and the Endocrine System,  Reproduction and Embryonic Development,  Nervous Systems, The Senses, How Animals Move, Plant Structure, Reproduction, and Development, Plant Nutrition and Transport, Control Systems in Plants, The Biosphere: An Introduction to Earth's Diverse Environments,  Behavioral Adaptations to the Environment, Population Ecology, Communities and Ecosystems, Conservation and Restoration Biology. For all readers interested in learning the basics of biology.</p>",
    "pages" => "928",
    "publisher" => "Benjamin Cummings; 6 edition (February 28, 2008)",
    "language" => "English",
    "ISBN-10" => "0321489845",
    "ISBN-13" => "978-0321489845",
    "category" => "biology"
  );

  $books[10863957864228736] = array(
    "id" => "10863957864228736",
    "title" => "Miller & Levine Biology: 2010 On-Level, Student Edition",
    "edition" => "Student Edition: 2010 Edition",    
    "img" => "img/bookcover/MK10863957864228736.png",
    "authors" => "Kenneth R. Miller, Joseph S. Levine",
    "description" => "<p>The respected author team of Ken Miller and Joe Levine are back with a new edition of biology books to inspire students to interact with trusted and up-to-date biology content. The authors' unique storytelling style engages students in biology, with a greater focus on written and visual analogies.</p>",
    "pages" => "1034",
    "publisher" => "Prentice Hall; Student Edition: 2010 edition (2010)",
    "language" => "English",
    "ISBN-10" => "0133669513",
    "ISBN-13" => "978-0133669510",
    "category" => "biology"
  );

  $books[10863957752048736] = array(
    "id" => "10863957752048736",
    "title" => "Geometry (McDougal Littell Jurgensen Geometry)",
    "edition" => "",    
    "img" => "img/bookcover/JR10863957752048736.png",
    "authors" => "Ray C. Jurgensen, Richard G. Brown, John W. Jurgensen",
    "description" => "<p>An excelent book for learning geometry.</p>",
    "pages" => "704",
    "publisher" => "Houghton Mifflin McDougal Littell; Notations, Worn Cover edition (2000)",
    "language" => "English",
    "ISBN-10" => "0395977274",
    "ISBN-13" => "978-0395977279",
    "category" => "mathematics"
  );

  $books[10523957752048736] = array(
    "id" => "10523957752048736",
    "title" => "Tutor in a Book's Geometry",
    "edition" => "",    
    "img" => "img/bookcover/GJ10523957752048736.png",
    "authors" => "Jo Greig, James R. Shiletto",
    "description" => "<p>Need help with Geometry? Designed to replicate the services of a skilled private tutor, the new and improved Tutor in a Book's Geometry is at your service! TIB's Geometry is an extremely thorough, teen tested and effective geometry tutorial.</p>

        <p>TIB’s Geometry includes more than 500 of the right, well-illustrated, carefully worked out and explained proofs and problems. Throughout TIB’s Geometry, there is ongoing, specific guidance as to the most effective solution and test taking strategies. Recurring patterns, which provide solutions to proofs, are pointed out, explained and illustrated using the visual aids that students find so helpful. Also included are dozens of graphic organizers, which help students understand, remember and recognize the connections between concepts.</p>

       <p>TIB’s author Jo Greig intended this book to level the playing field between the students who have tutors and those that don't. As a long time, very successful private mathematics tutor and teacher, Jo Greig knew exactly how best to accomplish this! TIB’s Geometry 294 pages are packed with every explanation, drawing, hint and memory tool possible! Not only does it have examples of the right proofs and problems, it also manages to impart every bit of the enthusiasm that great tutors impart to their private tutoring students. Ms. Greig holds a bachelors' degree in mathematics. Dr. J. Shiletto, the book's mathematics editor, holds a Ph.D in mathematics.</p>",
    "pages" => "294",
    "publisher" => "Tutor in a Book (August 8, 2012)",
    "language" => "English",
    "ISBN-10" => "0978639057",
    "ISBN-13" => "978-0978639051",
    "category" => "mathematics"
  );

  $books[10593957752046373] = array(
    "title" => "Discrete Mathematics and Its Applications Seventh Edition",
    "edition" => "7 edition",    
    "img" => "img/bookcover/RK10593957752046373.png",
    "authors" => "Kenneth Rosen",
    "description" => "<p>Discrete Mathematics and Its Applications, Seventh Edition, is intended for one or two term introductory Discrete Mathematics courses taken by students from a wide variety of majors, including Computer Science, Mathematics, and Engineering. This renowned best-selling text, which has been used at over 500 institutions around the world, gives a focused introduction to the primary themes in a Discrete Mathematics course and demonstrates the relevance and practicality of Discrete Mathematics to a wide variety of real-world applications―from Computer Science to Data Networking, to Psychology, to Chemistry, to Engineering, to Linguistics, to Biology, to Business, and many other important fields.</p>",
    "pages" => "1072",
    "publisher" => "McGraw-Hill Education; 7 edition (June 14, 2011)",
    "language" => "English",
    "ISBN-10" => "0073383090",
    "ISBN-13" => "978-0073383095",
    "category" => "mathematics"
  );

  $books[10593922752046373] = array(
    "title" => "Fluid Mechanics with Student DVD (McGraw-Hill Series in Mechanical Engineering)",
    "edition" => "7 edition",    
    "img" => "img/bookcover/WF10593922752046373.png",
    "authors" => "Frank White",
    "description" => "<p>The seventh edition of White’s Fluid Mechanics offers students a clear and comprehensive presentation of the material that demonstrates the progression from physical concepts to engineering applications and helps students quickly see the practical importance of fluid mechanics fundamentals. The wide variety of topics gives instructors many options for their course and is a useful resource to students long after graduation.</p>
        <p>The book’s unique problem-solving approach is presented at the start of the book and carefully integrated in all examples. Students can progress from general ones to those involving design, multiple steps and computer usage.</p>",
    "pages" => "862",
    "publisher" => "McGraw-Hill Education; 7 edition (February 2, 2010)",
    "language" => "English",
    "ISBN-10" => "0077422414",
    "ISBN-13" => "978-0077422417",
    "category" => "physics"
  );

  $books[10743928352046673] = array(
    "title" => "Thermodynamics: An Engineering Approach",
    "edition" => "8th Edition",    
    "img" => "img/bookcover/CY10743928352046673.png",
    "authors" => "Yunus Cengel, Michael Boles",
    "description" => "<p>Thermodynamics, An Engineering Approach, eighth edition, covers the basic principles of thermodynamics while presenting a wealth of real-world engineering examples so students get a feel for how thermodynamics is applied in engineering practice. This text helps students develop an intuitive understanding by emphasizing the physics and physical arguments. Cengel and Boles explore the various facets of thermodynamics through careful explanations of concepts and use of numerous practical examples and figures, having students develop necessary skills to bridge the gap between knowledge and the confidence to properly apply their knowledge.<>

    <p>McGraw-Hill is proud to offer Connect with the eighth edition of Cengel/Boles, Thermodynamics, An Engineering Approach. Connect is the only integrated learning system that empowers students by continuously adapting to deliver precisely what they need, when they need it, how they need it, so that your class time is more engaging and effective. Problems are graded automatically, and the results are recorded immediately. Track individual student performance - by question, assignment, or in relation to the class overall with detailed grade reports.</p>",
    "pages" => "1024",
    "publisher" => "McGraw-Hill Education; 7 edition (February 2, 2010)",
    "language" => "English",
    "ISBN-10" => "0073398179",
    "ISBN-13" => "978-0073398174",
    "category" => "physics"
  );

  $books[13343923352336673] = array(
    "title" => "Numerical Methods for Engineers",
    "edition" => "7th Edition",    
    "img" => "img/bookcover/CS13343923352336673.png",
    "authors" => "Steven Chapra, Raymond Canale",
    "description" => "<p>The seventh edition of Chapra and Canale's Numerical Methods for Engineers retains the instructional techniques that have made the text so successful. Chapra and Canale's unique approach opens each part of the text with sections called “Motivation,“ “Mathematical Background,” and “Orientation” Each part closes with an “Epilogue” containing “Trade-Offs,” “Important Relationships and Formulas,” and “Advanced Methods and Additional References.” Much more than a summary, the Epilogue deepens understanding of what has been learned and provides a peek into more advanced methods. </p>
      <p>Numerous new or revised problems are drawn from actual engineering practice. The expanded breadth of engineering disciplines covered is especially evident in these exercises, which now cover such areas as biotechnology and biomedical engineering. Excellent new examples and case studies span all areas of engineering giving students a broad exposure to various fields in engineering.</p>",
    "pages" => "992",
    "publisher" => "McGraw-Hill Education; 7 edition (January 24, 2014)",
    "language" => "English",
    "ISBN-10" => "007339792X",
    "ISBN-13" => "978-0073397924",
    "category" => "mathematics"
  );

  $books[13343963822336673] = array(
    "title" => "Fourier Series (Dover Books on Mathematics)",
    "edition" => "",    
    "img" => "img/bookcover/TG13343963822336673.png",
    "authors" => "Georgi P. Tolstov",
    "description" => "<p>Richard A. Silverman's series of translations of outstanding Russian textbooks and monographs is well-known to people in the fields of mathematics, physics, and engineering. The present book is another excellent text from this series, a valuable addition to the English-language literature on Fourier series.</p>
       <p>This edition is organized into nine well-defined chapters: Trigonometric Fourier Series, Orthogonal Systems, Convergence of Trigonometric Fourier Series, Trigonometric Series with Decreasing Coefficients, Operations on Fourier Series, Summation of Trigonometric Fourier Series, Double Fourier Series and the Fourier Integral, Bessel Functions and Fourier-Bessel Series, and the Eigenfunction Method and its Applications to Mathematical Physics. Every chapter moves clearly from topic to topic and theorem to theorem, with many theorem proofs given. A total of 107 problems will be found at the ends of the chapters, including many specially added to this English-language edition, and answers are given at the end of the text.</p>
      <p>Richard Silverman's excellent translation makes this book readily accessible to mathematicians and math students, as well as workers and students in the fields of physics and engineering. He has also added a bibliography, containing suggestions for collateral and supplementary reading. 1962 edition.</p>",
    "pages" => "352",
    "publisher" => "Dover Publications (June 1, 1976)",
    "language" => "English",
    "ISBN-10" => "0486633179",
    "ISBN-13" => "978-0486633176",
    "category" => "mathematics"
  );

  $books[13343961238536673] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13343735238536673] = array(
    "title" => "Learning Python, 5th Edition",
    "edition" => "Fifth Edition",    
    "img" => "img/bookcover/LM13343735238536673.png",
    "authors" => " Mark Lutz",
    "description" => "<p>Get a comprehensive, in-depth introduction to the core Python language with this hands-on book. Based on author Mark Lutz’s popular training course, this updated fifth edition will help you quickly write efficient, high-quality code with Python. It’s an ideal way to begin, whether you’re new to programming or a professional developer versed in other languages.</p>

   <p>Complete with quizzes, exercises, and helpful illustrations, this easy-to-follow, self-paced tutorial gets you started with both Python 2.7 and 3.3— the latest releases in the 3.X and 2.X lines—plus all other releases in common use today. You’ll also learn some advanced language features that recently have become more common in Python code.</p>

    <ul>
      <li>Explore Python’s major built-in object types such as numbers, lists, and dictionaries</li>
      <li>Create and process objects with Python statements, and learn Python’s general syntax model</li>
      <li>Use functions to avoid code redundancy and package code for reuse</li>
      <li>Organize statements, functions, and other tools into larger components with modules</li>
      <li>Dive into classes: Python’s object-oriented programming tool for structuring code</li>
      <li>Write large programs with Python’s exception-handling model and development tools</li>
      <li>Learn advanced Python tools, including decorators, descriptors, metaclasses, and Unicode processing</li>
    </ul>",
    "pages" => "1600",
    "publisher" => "O'Reilly Media; Fifth Edition edition (July 6, 2013)",
    "language" => "English",
    "ISBN-10" => "1449355730",
    "ISBN-13" => "978-1449355739",
    "category" => "programming"
  );

  $books[13343738834536673] = array(
    "title" => "The C++ Programming Language, 4th Edition",
    "edition" => "4th Edition",    
    "img" => "img/bookcover/SB13343738834536673.png",
    "authors" => "Bjarne Stroustrup",
    "description" => "<p>C++11 has arrived: thoroughly master it, with the definitive new guide from C++ creator Bjarne Stroustrup, C++ Programming Language, Fourth Edition! The brand-new edition of the world's most trusted and widely read guide to C++, it has been comprehensively updated for the long-awaited C++11 standard. Extensively rewritten to present the C++11 language, standard library, and key design techniques as an integrated whole, Stroustrup thoroughly addresses changes that make C++11 feel like a whole new language, offering definitive guidance for leveraging its improvements in performance, reliability, and clarity. C++ programmers around the world recognize Bjarne Stoustrup as the go-to expert for the absolutely authoritative and exceptionally useful information they need to write outstanding C++ programs. Now, as C++11 compilers arrive and development organizations migrate to the new standard, they know exactly where to turn once more: Stoustrup's C++ Programming Language, Fourth Edition.</p>",
    "pages" => "1368",
    "publisher" => "Addison-Wesley Professional; 4 edition (May 19, 2013)",
    "language" => "English",
    "ISBN-10" => "0321563840",
    "ISBN-13" => "978-0321563842",
    "category" => "programming"
  );

  $books[13343738736436673] = array(
    "title" => "Ruby on Rails Tutorial: Learn Web Development with Rails (3rd Edition) (Addison-Wesley Professional Ruby Series)",
    "edition" => "3rd Edition",    
    "img" => "img/bookcover/HM13343738736436673.png",
    "authors" => "Michael Hartl ",
    "description" => "<p>\“Ruby on Rails Tutorial by Michael Hartl has become a must-read for developers learning how to build Rails apps.\”
—Peter Cooper, Editor of Ruby Inside</p>
 
<p>Used by sites as diverse as Twitter, GitHub, Disney, and the Yellow Pages, Ruby on Rails is one of the most popular frameworks for developing web applications, but it can be challenging to learn and use. Whether you’re new to web development or new only to Rails, Ruby on Rails™ Tutorial, Third Edition, is the solution.</p>
 
<p>Best-selling author and leading Rails developer Michael Hartl teaches Rails by guiding you through the development of three example applications of increasing sophistication, focusing on the fundamental techniques in web development needed for virtually any kind of application. The updates to this edition include simplified installation via a standard development environment in the cloud, use of the default Rails stack throughout, a light-weight testing approach, an all-new section on image upload, and an all-new chapter on account activation and password resets, including sending email with Rails.</p>
 
<p>This indispensable guide provides integrated tutorials not only for Rails, but also for the essential Ruby, HTML, CSS, and SQL skills you’ll need when developing web applications. Hartl explains how each new technique solves a real-world problem, and then he demonstrates it with bite-sized code that’s simple enough to understand, yet novel enough to be useful. Whatever your previous web development experience, this book will guide you to true Rails mastery.</p>",
    "pages" => "744",
    "publisher" => "Addison-Wesley Professional; 3 edition (May 9, 2015)",
    "language" => "English",
    "ISBN-10" => "0134077709",
    "ISBN-13" => "978-0134077703",
    "category" => "programming"
  );

  $books[13348364737736673] = array(
    "title" => "JavaScript and JQuery: Interactive Front-End Web Development",
    "edition" => "1st Edition",    
    "img" => "img/bookcover/DJ13348364737736673.png",
    "authors" => "Jon Duckett",
    "description" => "<p>This full-color book will show you how to make your websites more interactive and your interfaces more interesting and intuitive.

THIS BOOK COVERS:
Basic programming concepts - assuming no prior knowledge of programming beyond an ability to create a web page using HTML & CSS
Core elements of the JavaScript language - so you can learn how to write your own scripts from scratch
jQuery - which will allow you to simplify the process of writing scripts (this is introduced half-way through the book once you have a solid understanding of JavaScript)
How to recreate techniques you will have seen on other web sites such as sliders, content filters, form validation, updating content using Ajax, and much more (these examples demonstrate writing your own scripts from scratch and how the theory you have learned is put into practice).
As with our first book (the best-selling HTML & CSS: Design and Build Websites), each chapter:
Breaks subjects down into bite-sized chunks with a new topic on each page
Contains clear descriptions of syntax, each one demonstrated with inspiring code samples
Uses diagrams and photography to explain complex concepts in a visual way
By the end of the book, not only will you be able to use the thousands of scripts, JavaScript APIs, and jQuery plugins that are freely available on the web, and be able to customize them - you will also be able to create your own scripts from scratch.

If you're looking to create more enriching web experiences, then this is the book for you.</p>",
    "pages" => "640",
    "publisher" => "Wiley; 1 edition (June 30, 2014))",
    "language" => "English",
    "ISBN-10" => "1118531647",
    "ISBN-13" => "978-1118531648",
    "category" => "programming"
  );

  $books[17722364737736673] = array(
    "title" => "Human Anatomy & Physiology (9th Edition)",
    "edition" => "9th Edition",    
    "img" => "img/bookcover/ME17722364737736673.png",
    "authors" => "Elaine N. Marieb, Katja N. Hoehn",
    "description" => "Ninth Edition of the best-selling Human Anatomy & Physiology, trusted authors Elaine N. Marieb and Katja Hoehn have produced the most accessible, comprehensive, up-to-date and visually stunning anatomy & physiology textbook on the market. Marieb draws on her career as an A&P professor and her experience completing her nursing education; Hoehn relies on her medical education and award-winning classroom instruction—together, they explain anatomy & physiology concepts and processes in a meaningful and memorable way.
 
In the most extensive revision to date–the Ninth Edition presents information in smaller and more digestible bites, making it easier to read and navigate.
 
Note: This is the standalone book if you want the Book/Access Card/eText order the ISBN below;
 
0321871901 / 9780321871909 Human Anatomy & Physiology Plus A Brief Atlas of the Human Body Plus MasteringA&P with Pearson eText
Package consists of
0321696549 / 9780321696540 MasteringA&P with Pearson eText -- Access Card -- for Human Anatomy & Physiology  
0321743261 / 9780321743268 Human Anatomy & Physiology
080537373X / 9780805373738 Brief Atlas of the Human Body, A (ValuePack Only)",
    "pages" => "1264",
    "publisher" => "Pearson; 9th edition (January 16, 2012)",
    "language" => "English",
    "ISBN-10" => "0321743261",
    "ISBN-13" => "978-0321743268",
    "category" => "biology"
  );

  $books[13343961838536673] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13342261838536673] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13356961838536673] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13343961838536773] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13343961658536673] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13663961838536673] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13343961838536645] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13453961838536673] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13343961838536123] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13343425838536673] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13245961838536673] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13343961838247673] = array(
    "title" => "Learn the MFC C++ Classes : Using Microsoft Visual C++ 4, Microsoft Visual C++ 1.5, Symantec C++ 7, and Borland C++ 5",
    "edition" => "",    
    "img" => "img/bookcover/WS13343961238536673.png",
    "authors" => "Shirley Wodtke",
    "description" => "<p>This book teaches introductory programmers who are already familiar with object-oriented programming and C++ how to use the MFC library.</p>",
    "pages" => "655",
    "publisher" => "Wordware Publishing, Inc.; Pap/Dis edition (January 25, 1997)",
    "language" => "English",
    "ISBN-10" => "1556225121",
    "ISBN-13" => "",
    "category" => "programming"
  );

  $books[13343627438536673] = array(
    "title" => "Learning Python, 5th Edition",
    "edition" => "Fifth Edition",    
    "img" => "img/bookcover/LM13343735238536673.png",
    "authors" => " Mark Lutz",
    "description" => "<p>Get a comprehensive, in-depth introduction to the core Python language with this hands-on book. Based on author Mark Lutz’s popular training course, this updated fifth edition will help you quickly write efficient, high-quality code with Python. It’s an ideal way to begin, whether you’re new to programming or a professional developer versed in other languages.</p>

   <p>Complete with quizzes, exercises, and helpful illustrations, this easy-to-follow, self-paced tutorial gets you started with both Python 2.7 and 3.3— the latest releases in the 3.X and 2.X lines—plus all other releases in common use today. You’ll also learn some advanced language features that recently have become more common in Python code.</p>

    <ul>
      <li>Explore Python’s major built-in object types such as numbers, lists, and dictionaries</li>
      <li>Create and process objects with Python statements, and learn Python’s general syntax model</li>
      <li>Use functions to avoid code redundancy and package code for reuse</li>
      <li>Organize statements, functions, and other tools into larger components with modules</li>
      <li>Dive into classes: Python’s object-oriented programming tool for structuring code</li>
      <li>Write large programs with Python’s exception-handling model and development tools</li>
      <li>Learn advanced Python tools, including decorators, descriptors, metaclasses, and Unicode processing</li>
    </ul>",
    "pages" => "1600",
    "publisher" => "O'Reilly Media; Fifth Edition edition (July 6, 2013)",
    "language" => "English",
    "ISBN-10" => "1449355730",
    "ISBN-13" => "978-1449355739",
    "category" => "programming"
  );

  $books[13343735237396673] = array(
    "title" => "Learning Python, 5th Edition",
    "edition" => "Fifth Edition",    
    "img" => "img/bookcover/LM13343735238536673.png",
    "authors" => " Mark Lutz",
    "description" => "<p>Get a comprehensive, in-depth introduction to the core Python language with this hands-on book. Based on author Mark Lutz’s popular training course, this updated fifth edition will help you quickly write efficient, high-quality code with Python. It’s an ideal way to begin, whether you’re new to programming or a professional developer versed in other languages.</p>

   <p>Complete with quizzes, exercises, and helpful illustrations, this easy-to-follow, self-paced tutorial gets you started with both Python 2.7 and 3.3— the latest releases in the 3.X and 2.X lines—plus all other releases in common use today. You’ll also learn some advanced language features that recently have become more common in Python code.</p>

    <ul>
      <li>Explore Python’s major built-in object types such as numbers, lists, and dictionaries</li>
      <li>Create and process objects with Python statements, and learn Python’s general syntax model</li>
      <li>Use functions to avoid code redundancy and package code for reuse</li>
      <li>Organize statements, functions, and other tools into larger components with modules</li>
      <li>Dive into classes: Python’s object-oriented programming tool for structuring code</li>
      <li>Write large programs with Python’s exception-handling model and development tools</li>
      <li>Learn advanced Python tools, including decorators, descriptors, metaclasses, and Unicode processing</li>
    </ul>",
    "pages" => "1600",
    "publisher" => "O'Reilly Media; Fifth Edition edition (July 6, 2013)",
    "language" => "English",
    "ISBN-10" => "1449355730",
    "ISBN-13" => "978-1449355739",
    "category" => "programming"
  );

  $books[13343675238536673] = array(
    "title" => "Learning Python, 5th Edition",
    "edition" => "Fifth Edition",    
    "img" => "img/bookcover/LM13343735238536673.png",
    "authors" => " Mark Lutz",
    "description" => "<p>Get a comprehensive, in-depth introduction to the core Python language with this hands-on book. Based on author Mark Lutz’s popular training course, this updated fifth edition will help you quickly write efficient, high-quality code with Python. It’s an ideal way to begin, whether you’re new to programming or a professional developer versed in other languages.</p>

   <p>Complete with quizzes, exercises, and helpful illustrations, this easy-to-follow, self-paced tutorial gets you started with both Python 2.7 and 3.3— the latest releases in the 3.X and 2.X lines—plus all other releases in common use today. You’ll also learn some advanced language features that recently have become more common in Python code.</p>

    <ul>
      <li>Explore Python’s major built-in object types such as numbers, lists, and dictionaries</li>
      <li>Create and process objects with Python statements, and learn Python’s general syntax model</li>
      <li>Use functions to avoid code redundancy and package code for reuse</li>
      <li>Organize statements, functions, and other tools into larger components with modules</li>
      <li>Dive into classes: Python’s object-oriented programming tool for structuring code</li>
      <li>Write large programs with Python’s exception-handling model and development tools</li>
      <li>Learn advanced Python tools, including decorators, descriptors, metaclasses, and Unicode processing</li>
    </ul>",
    "pages" => "1600",
    "publisher" => "O'Reilly Media; Fifth Edition edition (July 6, 2013)",
    "language" => "English",
    "ISBN-10" => "1449355730",
    "ISBN-13" => "978-1449355739",
    "category" => "programming"
  );

  $books[13343735238536530] = array(
    "title" => "Learning Python, 5th Edition",
    "edition" => "Fifth Edition",    
    "img" => "img/bookcover/LM13343735238536673.png",
    "authors" => " Mark Lutz",
    "description" => "<p>Get a comprehensive, in-depth introduction to the core Python language with this hands-on book. Based on author Mark Lutz’s popular training course, this updated fifth edition will help you quickly write efficient, high-quality code with Python. It’s an ideal way to begin, whether you’re new to programming or a professional developer versed in other languages.</p>

   <p>Complete with quizzes, exercises, and helpful illustrations, this easy-to-follow, self-paced tutorial gets you started with both Python 2.7 and 3.3— the latest releases in the 3.X and 2.X lines—plus all other releases in common use today. You’ll also learn some advanced language features that recently have become more common in Python code.</p>

    <ul>
      <li>Explore Python’s major built-in object types such as numbers, lists, and dictionaries</li>
      <li>Create and process objects with Python statements, and learn Python’s general syntax model</li>
      <li>Use functions to avoid code redundancy and package code for reuse</li>
      <li>Organize statements, functions, and other tools into larger components with modules</li>
      <li>Dive into classes: Python’s object-oriented programming tool for structuring code</li>
      <li>Write large programs with Python’s exception-handling model and development tools</li>
      <li>Learn advanced Python tools, including decorators, descriptors, metaclasses, and Unicode processing</li>
    </ul>",
    "pages" => "1600",
    "publisher" => "O'Reilly Media; Fifth Edition edition (July 6, 2013)",
    "language" => "English",
    "ISBN-10" => "1449355730",
    "ISBN-13" => "978-1449355739",
    "category" => "programming"
  );

?>
