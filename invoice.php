<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}

require 'fpdf/fpdf.php';
$user_id = $_GET['user_id'];
$trx_id = $_GET['trx_id'];
// Instantiate and use the FPDF class
$pdf = new FPDF();

//Add a new page
$pdf->AddPage();

// Set the font for the text
$pdf->SetFont('Arial', 'B', 18);

// Prints a cell with given text
include_once("db.php");
$sql = "SELECT *  FROM user_info WHERE user_id = '$user_id'";
$run_query = mysqli_query($con,$sql);
$row = mysqli_fetch_array($run_query);
$user_name = $row["first_name"] . ' ' .$row["last_name"];

$pdf->SetFont('arial', '', 12);
$pdf->Cell(0, 10, "Invoice Details", 1, 1, 'C');
$pdf->Cell(0, 10, "", 1, 1);
$pdf->Cell(90, 10, "Customer Name", 1, 0);
$pdf->Cell(100, 10, $user_name, 1, 1);
$pdf->Cell(90, 10, "Email", 1, 0);
$pdf->Cell(100, 10, $row["email"], 1, 1);
$pdf->Cell(90, 10, "Mobile No.", 1, 0);
$pdf->Cell(100, 10, $row['mobile'], 1, 1);
$pdf->Cell(0, 10, "", 1, 1);

$pdf->Cell(80, 10, "Product", 1, 0);
$pdf->Cell(35, 10, "Quantity", 1, 0);
$pdf->Cell(35, 10, "TAX", 1, 0);
$pdf->Cell(40, 10, "Price (".CURRENCY.")", 1, 1);


$sql = "SELECT * FROM orders WHERE trx_id = '$trx_id' and user_id = '$user_id' and p_status = 'Completed'";
$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query) > 0) {
    # code...
    while ($row = mysqli_fetch_array($query)) {
        $product_id[] = $row["product_id"];
        $qty[] = $row["qty"];
    }
    $total = 0;
    for ($i = 0; $i < count($product_id); $i++) {
        $sql = "SELECT * FROM products WHERE product_id = '$product_id[$i]'";
        $run_query = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($run_query);
        $total += $row["product_price"];
        $pdf->Cell(80, 10, $row["product_title"], 1, 0);
        $pdf->Cell(35, 10, $qty[$i], 1, 0);
        $pdf->Cell(35, 10, '18%', 1, 0);
        $pdf->Cell(40, 10, $row["product_price"], 1, 1);
    }
    $pdf->Cell(0, 10, "", 1, 1);

    $pdf->Cell(120, 10, 'Total', 1, 0, 'C');
    $pdf->Cell(70, 10, $total.' '.CURRENCY, 1, 0, 'C');
}

// $pdf->Cell(60, 20, $pdf->WriteHTML( ($html)));
$file = time() . '.pdf';
$pdf->output($file, 'D');
