<?php
include 'header.php'; 
$s_link =$_SESSION["search-link"];

?>
<?php if($s_link == 'sql') {?>
    <div class="wiki-container sql">
      <div class="wiki-wrapper">
        <div class="wiki-left">
          <div class="wiki-links">
            <div class="wiki-link-items">
              <span class="wiki-border"
                ><a class="wiki-link" href="#MySql">MySQL Tutorial</a></span
              >
              <span class="wiki-border"
                ><a class="wiki-link" href="#Wiad">What is a Database?</a></span
              >
              <span class="wiki-border"
                ><a class="wiki-link" href="#Mdt">MySQL - Data Types</a></span
              >
              <span class="wiki-border"
                ><a class="wiki-link" href="#Mc">MySQL - Connection</a></span
              >
              <span class="wiki-border"
                ><a class="wiki-link" href="#Mccd"
                  >MySQL - Create Database</a
                ></span
              >
              <span class="wiki-border"
                ><a class="wiki-link" href="#Msq">MySQL - Select Query</a></span
              >
              <span class="wiki-border"
                ><a class="wiki-link" href="#Mup">MySQL - Update Query</a></span
              >
            </div>
          </div>
        </div>
        <div class="wiki-right">
          <div class="wiki-item">
            <h2 class="wiki-title" id="MySql">MySQL Tutorial</h2>
            <p class="wiki-text">
              MySQL is the most popular Open Source Relational SQL database
              management system. MySQL is one of the best RDBMS being used for
              developing web-based software applications. This tutorial will
              give you quick start with MySQL and make you comfortable with
              MySQL programming.
            </p>
          </div>
          <div class="wiki-item">
            <h2 class="wiki-title">Audience</h2>
            <p class="wiki-text">
              This reference has been prepared for the beginners to help them
              understand the basics to advanced concepts related to MySQL
              languages.
            </p>
          </div>
          <div class="wiki-sub-item">
            <h2 class="wiki-sub-title" id="Wiad">What is a Database?</h2>
            <p class="wiki-text">
              A database is a separate application that stores a collection of
              data. Each database has one or more distinct APIs for creating,
              accessing, managing, searching and replicating the data it holds.
              Other kinds of data stores can also be used, such as files on the
              file system or large hash tables in memory but data fetching and
              writing would not be so fast and easy with those type of systems.
              Nowadays, we use relational database management systems (RDBMS) to
              store and manage huge volume of data. This is called relational
              database because all the data is stored into different tables and
              relations are established using primary keys or other keys known
              as Foreign Keys.
            </p>
          </div>
          <div class="wiki-item with-bullets">
            <h2 class="wiki-title" id="Mdt">MySQL - Data Types</h2>
            <p class="wiki-text">
              Properly defining the fields in a table is important to the
              overall optimization of your database. You should use only the
              type and size of field you really need to use. For example, do not
              define a field 10 characters wide, if you know you are only going
              to use 2 characters. These type of fields (or columns) are also
              referred to as data types, after the type of data you will be
              storing in those fields. MySQL uses many different data types
              broken into three categories
            </p>
            <ul class="list">
              <li>Numeric</li>
              <li>Date and Time</li>
              <li>String Types.</li>
            </ul>
          </div>
          <div class="wiki-sub-item">
            <h2 class="wiki-sub-title">Numeric Data Types</h2>
            <p class="wiki-text">
              MySQL uses all the standard ANSI SQL numeric data types, so if
              you're coming to MySQL from a different database system, these
              definitions will look familiar to you. The following list shows
              the common numeric data types and their descriptions −
            </p>
            <ul class="list">
              <li>
                INT − A normal-sized integer that can be signed or unsigned. If
                signed, the allowable range is from -2147483648 to 2147483647.
                If unsigned, the allowable range is from 0 to 4294967295. You
                can specify a width of up to 11 digits.
              </li>
              <li>
                TINYINT − A very small integer that can be signed or unsigned.
                If signed, the allowable range is from -128 to 127. If unsigned,
                the allowable range is from 0 to 255. You can specify a width of
                up to 4 digits.
              </li>
              <li>
                FLOAT(M,D) − A floating-point number that cannot be unsigned.
                You can define the display length (M) and the number of decimals
                (D). This is not required and will default to 10,2, where 2 is
                the number of decimals and 10 is the total number of digits
                (including decimals). Decimal precision can go to 24 places for
                a FLOAT.
              </li>
              <li>
                DECIMAL(M,D) − An unpacked floating-point number that cannot be
                unsigned. In the unpacked decimals, each decimal corresponds to
                one byte. Defining the display length (M) and the number of
                decimals (D) is required. NUMERIC is a synonym for DECIMAL.
              </li>
            </ul>
          </div>
          <div class="wiki-sub-item with-bullets">
            <h2 class="wiki-sub-title">Date and Time Types</h2>
            <p class="wiki-text">
              The MySQL date and time datatypes are as follows −
            </p>
            <ul class="list">
              <li>
                DATE − A date in YYYY-MM-DD format, between 1000-01-01 and
                9999-12-31. For example, December 30th, 1973 would be stored as
                1973-12-30.
              </li>
              <li>
                DATETIME − A date and time combination in YYYY-MM-DD HH:MM:SS
                format, between 1000-01-01 00:00:00 and 9999-12-31 23:59:59. For
                example, 3:30 in the afternoon on December 30th, 1973 would be
                stored as 1973-12-30 15:30:00.
              </li>
              <li>
                TIMESTAMP − A timestamp between midnight, January 1st, 1970 and
                sometime in 2037. This looks like the previous DATETIME format,
                only without the hyphens between
              </li>
            </ul>
          </div>
          <div class="wiki-sub-item with-bullets">
            <h2 class="wiki-sub-title" id="Dtt">String Types</h2>
            <p class="wiki-text">
              Although the numeric and date types are fun, most data you'll
              store will be in a string format. This list describes the common
              string datatypes in MySQL.
            </p>
            <ul class="list">
              <li>
                CHAR(M) − A fixed-length string between 1 and 255 characters in
                length (for example CHAR(5)), right-padded with spaces to the
                specified length when stored. Defining a length is not required,
                but the default is 1.
              </li>
              <li>
                VARCHAR(M) − A variable-length string between 1 and 255
                characters in length. For example, VARCHAR(25). You must define
                a length when creating a VARCHAR field.
              </li>
              <li>
                ENUM − An enumeration, which is a fancy term for list. When
                defining an ENUM, you are creating a list of items from which
                the value must be selected (or it can be NULL). For example, if
                you wanted your field to contain "A" or "B" or "C", you would
                define your ENUM as ENUM ('A', 'B', 'C') and only those values
                (or NULL) could ever populate that field.
              </li>
            </ul>
          </div>
          <div class="wiki-item">
            <h2 class="wiki-title" id="Mc">MySQL - Connection</h2>
            <h2 class="wiki-sub-title">MySQL Connection Using MySQL Binary</h2>
            <p class="wiki-text">
              You can establish the MySQL database using the mysql binary at the
              command prompt. Here is a simple example to connect to the MySQL
              server from the command prompt −
            </p>
            <ul class="list">
              <li>[root@host]# mysql -u root -p</li>
              <li>Enter password:******</li>
            </ul>
          </div>
          <div class="wiki-item">
            <h2 class="wiki-title" id="Mccd">MySQL - Create Database</h2>
            <h2 class="wiki-sub-title">Create Database Using mysqladmin</h2>
            <p class="wiki-text">
              You would need special privileges to create or to delete a MySQL
              database. So assuming you have access to the root user, you can
              create any database using the mysql mysqladmin binary. Example
              Here is a simple example to create a database called TUTORIALS −
            </p>
            <ul class="list">
              <li>[root@host]# mysqladmin -u root -p create TUTORIALS</li>
              <li>Enter password:******</li>
            </ul>
          </div>
          <div class="wiki-sub-item">
            <h2 class="wiki-sub-title">Create a Database using PHP Script</h2>
            <p class="wiki-text">
              PHP uses mysqli query() or mysql_query() function to create or
              delete a MySQL database. This function takes two parameters and
              returns TRUE on success or FALSE on failure.
            </p>
            <ul class="list">
              <li>$mysqli->query($sql,$resultmode)</li>
            </ul>
          </div>
          <div class="wiki-item">
            <h2 class="wiki-title" id="Msq">MySQL - Select Query</h2>
            <p class="wiki-text">
              The SQL SELECT command is used to fetch data from the MySQL
              database. You can use this command at mysql> prompt as well as in
              any script like PHP.
            </p>
            <h2 class="wiki-sub-title">Syntax</h2>
            <p class="wiki-text">
              Here is generic SQL syntax of SELECT command to fetch data from
              the MySQL table −
            </p>
            <ul class="list">
              <li>SELECT field1, field2,...fieldN</li>
              <li>FROM table_name1, table_name2...</li>
              <li>[WHERE Clause]</li>
              <li>[OFFSET M ][LIMIT N]</li>
            </ul>
            <ul class="list">
              <li>
                You can use one or more tables separated by comma to include
                various conditions using a WHERE clause, but the WHERE clause is
                an optional part of the SELECT command.
              </li>
              <li>
                You can fetch one or more fields in a single SELECT command.
              </li>
              <li>
                You can specify star (*) in place of fields. In this case,
                SELECT will return all the fields.
              </li>
              <li>You can specify any condition using the WHERE clause.</li>
              <li>
                You can specify an offset using OFFSET from where SELECT will
                start returning records. By default, the offset starts at zero.
              </li>
              <li>
                You can limit the number of returns using the LIMIT attribute.
              </li>
            </ul>
          </div>
          <div class="wiki-item">
            <h2 class="wiki-title" id="Mup">MySQL - Update Query</h2>
            <p class="wiki-text">
              There may be a requirement where the existing data in a MySQL
              table needs to be modified. You can do so by using the SQL UPDATE
              command. This will modify any field value of any MySQL table.
            </p>
            <h2 class="wiki-sub-title">Syntax</h2>
            <p class="wiki-text">
              The following code block has a generic SQL syntax of the UPDATE
              command to modify the data in the MySQL table −
            </p>
            <ul class="list">
              <li>
                UPDATE table_name SET field1 = new-value1, field2 = new-value2
              </li>
              <li>[WHERE Clause]</li>
            </ul>
            <ul class="list">
              <li>You can update one or more field altogether.</li>
              <li>You can specify any condition using the WHERE clause.</li>
              <li>You can update the values in a single table at a time.</li>
            </ul>
            <p class="wiki-text" style="margin-top: 10px">
              The WHERE clause is very useful when you want to update the
              selected rows in a table.
            </p>
          </div>
        </div>
      </div>
    </div>
<?php }?>
<?php if($s_link == 'php') {?>
     <div class="wiki-container php">
      <div class="wiki-wrapper">
        <div class="wiki-left">
          <div class="wiki-links">
            <div class="wiki-link-items">
              <span class="wiki-border"
                ><a class="wiki-link" href="#Pt">PHP Tutorial</a></span
              >

              <span class="wiki-border"
                ><a class="wiki-link" href="#Pot">PHP - Operator Types</a></span
              >

              <span class="wiki-border"
                ><a class="wiki-link" href="#Pdm"
                  >PHP - Decision Making</a
                ></span
              >
              <span class="wiki-border"
                ><a class="wiki-link" href="#Plt">PHP - Loop Types</a></span
              >
              <span class="wiki-border"
                ><a class="wiki-link" href="#Pa">PHP - Arrays</a></span
              >
              <span class="wiki-border"
                ><a class="wiki-link" href="#Pct"
                  >PHP - Constants Types</a
                ></span
              >
              <span class="wiki-border"
                ><a class="wiki-link" href="#Pgpm"
                  >PHP - GET & POST Methods</a
                ></span
              >
            </div>
          </div>
        </div>
        <div class="wiki-right">
          <div class="wiki-item">
            <h2 class="wiki-title" id="Pt">PHP Tutorial</h2>
            <p class="wiki-text">
              The PHP Hypertext Preprocessor (PHP) is a programming language
              that allows web developers to create dynamic content that
              interacts with databases. PHP is basically used for developing web
              based software applications. This tutorial helps you to build your
              base with PHP.
            </p>
            <h2 class="wiki-sub-title">Why to Learn PHP?</h2>
            <p class="wiki-text">
              PHP started out as a small open source project that evolved as
              more and more people found out how useful it was. Rasmus Lerdorf
              unleashed the first version of PHP way back in 1994.
            </p>
            <p class="wiki-text">
              PHP is a MUST for students and working professionals to become a
              great Software Engineer specially when they are working in Web
              Development Domain. I will list down some of the key advantages of
              learning PHP:
            </p>
            <ul class="list">
              <li>
                PHP is a recursive acronym for "PHP: Hypertext Preprocessor".
              </li>
              <li>
                It is integrated with a number of popular databases, including
                MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL
                Server.
              </li>
              <li>
                PHP is a server side scripting language that is embedded in
                HTML. It is used to manage dynamic content, databases, session
                tracking, even build entire e-commerce sites.
              </li>
            </ul>
          </div>

          <div class="wiki-item">
            <h2 class="wiki-title" id="Pot">PHP - Operator Types</h2>
            <p class="wiki-text">
              What is Operator? Simple answer can be given using expression 4 +
              5 is equal to 9. Here 4 and 5 are called operands and + is called
              operator. PHP language supports following type of operators.
            </p>
            <ul class="list">
              <li>Arithmetic Operators</li>
              <li>Comparison Operators</li>
              <li>Logical (or Relational) Operators</li>
              <li>Assignment Operators</li>
              <li>Conditional (or ternary) Operators</li>
            </ul>
          </div>
          <!--  -->

          <div class="wiki-item with-bullets">
            <h2 class="wiki-title" id="Pdm">PHP - Decision Making</h2>
            <p class="wiki-text">
              The if, elseif ...else and switch statements are used to take
              decision based on the different condition.
            </p>
            <p class="wiki-text">
              You can use conditional statements in your code to make your
              decisions. PHP supports following three decision making statements
              −
            </p>
            <ul class="list">
              <li>
                if...else statement − use this statement if you want to execute
                a set of code when a condition is true and another if the
                condition is not true
              </li>
              <li>
                elseif statement − is used with the if...else statement to
                execute a set of code if one of the several condition is true
              </li>
              <li>
                switch statement − is used if you want to select one of many
                blocks of code to be executed, use the Switch statement. The
                switch statement is used to avoid long blocks of
                if..elseif..else code.
              </li>
            </ul>
          </div>

          <div class="wiki-sub-item">
            <h2 class="wiki-sub-title" id="Plt">PHP - Loop Types</h2>
            <p class="wiki-text">
              Loops in PHP are used to execute the same block of code a
              specified number of times. PHP supports following four loop types.
            </p>
            <ul class="list">
              <li>
                for − loops through a block of code a specified number of times.
              </li>
              <li>
                while − loops through a block of code if and as long as a
                specified condition is true.
              </li>
              <li>
                do...while − loops through a block of code once, and then
                repeats the loop as long as a special condition is true.
              </li>
              <li>
                foreach − loops through a block of code for each element in an
                array.
              </li>
            </ul>
          </div>
          <div class="wiki-sub-item with-bullets">
            <h2 class="wiki-sub-title" id="Pa">PHP - Arrays</h2>
            <p class="wiki-text">
              An array is a data structure that stores one or more similar type
              of values in a single value. For example if you want to store 100
              numbers then instead of defining 100 variables its easy to define
              an array of 100 length.
            </p>
            <p class="wiki-text">
              There are three different kind of arrays and each array value is
              accessed using an ID c which is called array index.
            </p>
            <ul class="list">
              <li>
                Numeric array − An array with a numeric index. Values are stored
                and accessed in linear fashion.
              </li>
              <li>
                Associative array − An array with strings as index. This stores
                element values in association with key values rather than in a
                strict linear index order.
              </li>
              <li>
                Multidimensional array − An array containing one or more arrays
                and values are accessed using multiple indices
              </li>
            </ul>
          </div>

          <div class="wiki-item">
            <h2 class="wiki-title" id="Pct">PHP - Constants Types</h2>
            <p class="wiki-text">
              A constant is a name or an identifier for a simple value. A
              constant value cannot change during the execution of the script.
              By default, a constant is case-sensitive. By convention, constant
              identifiers are always uppercase. A constant name starts with a
              letter or underscore, followed by any number of letters, numbers,
              or underscores. If you have defined a constant, it can never be
              changed or undefined.
            </p>
            <p class="wiki-text">
              To define a constant you have to use define() function and to
              retrieve the value of a constant, you have to simply specifying
              its name. Unlike with variables, you do not need to have a
              constant with a $. You can also use the function constant() to
              read a constant's value if you wish to obtain the constant's name
              dynamically.
            </p>
            <h2 class="wiki-sub-title">constant() function</h2>
            <p class="wiki-text">
              As indicated by the name, this function will return the value of
              the constant.
            </p>
            <p class="wiki-text">
              This is useful when you want to retrieve value of a constant, but
              you do not know its name, i.e. It is stored in a variable or
              returned by a function.
            </p>
            <h2 class="wiki-sub-title">
              Differences between constants and variables are
            </h2>
            <ul class="list">
              <li>
                There is no need to write a dollar sign ($) before a constant,
                where as in Variable one has to write a dollar sign.
              </li>
              <li>
                Constants cannot be defined by simple assignment, they may only
                be defined using the define() function.
              </li>
              <li>
                Constants may be defined and accessed anywhere without regard to
                variable scoping rules.
              </li>
              <li>
                Once the Constants have been set, may not be redefined or
                undefined.
              </li>
            </ul>
          </div>
          <div class="wiki-item">
            <h2 class="wiki-title" id="Pgpm">PHP - GET & POST Methods</h2>
            <p class="wiki-text">
              There are two ways the browser client can send information to the
              web server.
            </p>
            <ul class="list">
              <li>The GET Method</li>
              <li>The POST Method</li>
            </ul>
            <p class="wiki-text" style="margin-top: 10px">
              Before the browser sends the information, it encodes it using a
              scheme called URL encoding. In this scheme, name/value pairs are
              joined with equal signs and different pairs are separated by the
              ampersand.
            </p>
            <ul class="list">
              <li>name1=value1&name2=value2&name3=value3</li>
            </ul>
            <p class="wiki-text" style="margin-top: 10px">
              Spaces are removed and replaced with the + character and any other
              nonalphanumeric characters are replaced with a hexadecimal values.
              After the information is encoded it is sent to the server.
            </p>
            <h2 class="wiki-sub-title">The GET Method</h2>
            <p class="wiki-text" style="margin-top: 10px">
              The GET method sends the encoded user information appended to the
              page request. The page and the encoded information are separated
              by the ? character.
            </p>
            <ul class="list">
              <li>http://www.test.com/index.htm?name1=value1&name2=value2</li>
            </ul>
            <ul class="list">
              <li>
                The GET method produces a long string that appears in your
                server logs, in the browser's Location: box.
              </li>
              <li>
                The GET method is restricted to send upto 1024 characters only.
              </li>
              <li>
                Never use GET method if you have password or other sensitive
                information to be sent to the server.
              </li>
              <li>
                GET can't be used to send binary data, like images or word
                documents, to the server.
              </li>
              <li>
                The data sent by GET method can be accessed using QUERY_STRING
                environment variable.
              </li>
              <li>
                The PHP provides $_GET associative array to access all the sent
                information using GET method.
              </li>
            </ul>
            <h2 class="wiki-sub-title">The POST Method</h2>
            <p class="wiki-text">
              The POST method transfers information via HTTP headers. The
              information is encoded as described in case of GET method and put
              into a header called QUERY_STRING.
            </p>
            <ul class="list">
              <li>
                The POST method does not have any restriction on data size to be
                sent.
              </li>
              <li>
                The POST method can be used to send ASCII as well as binary
                data.
              </li>
              <li>
                The data sent by POST method goes through HTTP header so
                security depends on HTTP protocol. By using Secure HTTP you can
                make sure that your information is secure.
              </li>
              <li>
                The PHP provides $_POST associative array to access all the sent
                information using POST method.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php }?>
    <a href="#" class="aarrow"
      >Goto top<span class="fas fa-chevron-right"></span
    ></a>
  </body>
</html>