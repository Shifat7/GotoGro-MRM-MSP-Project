<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="description" content="Managing Software Projects"/>
        <meta name="keywords" content="HTML, CSS, Grocery, MRM, Project"/>
        <meta name="author" content="Faiz Syed Ibrahim 103146075"/>
        <meta name="author" content="Aishwarya Kaggdas 103170236"/>
        <meta name="author" content="Shifat Bin Rahman 103528424"/>
        <meta name="author" content="Vishnuwardhan Gopal 103174555"/>
        <meta name="author" content="Kai Ikeda 103492189"/>

        <link href= "style.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">

        <title>Goto Gro MRM</title>
    </head>


     <body>  
        <div id="header">
            <div id="titleboxone"></div>
                <div id="titleboxtwo">
                    <h1 id="titleheading">Goto Grocery</h1>
                </div>
            </div>

        <div id="navbarbg">
            <p id="navbartext">
                <a id="whitelink" href="index.php"> Home &nbsp;</a> | &nbsp;
                <a id="whitelink" href="addmember.php">Add Member &nbsp;</a> | &nbsp;
                <a id="whitelink" href="membersearchdelete.php">Member Search/Delete &nbsp;</a> | &nbsp;
                <a id="whitelink" href="addsalesrecord.php">Add Sales Record &nbsp;</a> | &nbsp;
                <a id="whitelink" href="salesrecordsearchdelete.php">Sales Record Search/Delete </a> 
            </p>
        </div>

        <h2>Add Sales Record Form</h2>


        <form action="includes/sales.php" method="POST">
        <fieldset>
            <legend class="legendtext"> Member Details &nbsp</legend>
            <p><label for="Member_ID">Member ID</label>
            <input type="text" name= "Member_ID" id="Member_ID" required="required" size="10" maxlength="5" pattern="\d{5}" /></p>       
        </fieldset>




         <fieldset>
            <p><label for="Sales_ID">Sales ID</label>
            <input type="text" name= "Sales_ID" id="Sales_ID" required="required" maxlength="6" size="10" pattern="\d{6}"  /></p>
            <legend class="legendtext">Product Details &nbsp</legend>
            <p><label for="Product_ID">Product ID</label>
            <input type="text" name= "Product_ID" id="Product_ID" required="required" maxlength="5" size="10" pattern="\d{5}"  />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="Product_Name">Product Name</label>
            <input type="text" name= "Product_Name" id="Product_Name" required="required" maxlength="20" size="20" pattern="^[a-zA-Z ]+$"/></p>
            <p><label for="Quantity">Quantity</label>
            <input type="text" name= "Quantity" id="Quantity" required="required" size="10" maxlength="5" pattern="\d{1-5}" /></p>
            <p><label for="Unit_Price">Unit Price</label>
            <input type="text" name= "Unit_Price" id="Unit_Price" required="required" size="10" maxlength="5" pattern="\d{1-5}" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="Amount">Total Amount</label>
            <input type="text" name= "Amount" id="Amount" required="required" size="10" maxlength="5" pattern="\d{1-5}" /></p>

        </fieldset>


         <fieldset>
            <legend class="legendtext">Time &nbsp</legend>
            <p><label for="Date">Date : </label>
             <input type="date" id="Date" name="Date"></p>
             <p><label for="Day">Day : </label>
            <input type="text" name= "Day" id="Day" required="required" maxlength="20" size="10" pattern="^[a-zA-Z ]+$"/></p>

        </fieldset>


        <p><input type="submit" value="Add Sales Record" class="button" />
        <input type="reset" value="Clear" class="button"/></p>

        </form>

        <footer>
            <p id="footertext">
                 <a id="whitelink">Faiz Syed Ibrahim 103146075</a> / <a id="whitelink">Aishwarya Kaggdas 103170236</a> / <a id="whitelink">Shifat Bin Rahman 103528424</a> 
                 <br/>
                 <a id="whitelink">Vishnuwardhan Gopal 103174555</a> / <a id="whitelink">Kai Ikeda 103492189</a>
            </p>
        </footer>
    </body> 
</html>

        