<!DOCTYPE html>
<html lang="es">
<head>
  <title>Catalogo</title>

<?php include '../partials/headC.php';?>

<?php include '../partials/menuC.php';?>

<br></br>

<div class="card mb-3">
  <h1 class="page-header">Compras Realizadas</h1>
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Office</th>
          <th>Age</th>
          <th>Start date</th>
          <th>Salary</th>
        </tr>
      </tfoot>
      <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>2012/09/26</td>
        <td>$217,500</td>
      </tr>
      <tr>
        <td>Michelle House</td>
        <td>Integration Specialist</td>
        <td>Sidney</td>
        <td>37</td>
        <td>2011/06/02</td>
        <td>$95,400</td>
      </tr>
      <tr>
        <td>Zorita Serrano</td>
        <td>Software Engineer</td>
        <td>San Francisco</td>
        <td>56</td>
        <td>2012/06/01</td>
        <td>$115,000</td>
      </tr>
      <tr>
        <td>Jonas Alexander</td>
        <td>Developer</td>
        <td>San Francisco</td>
        <td>30</td>
        <td>2010/07/14</td>
        <td>$86,500</td>
      </tr>
      <tr>
        <td>Shad Decker</td>
        <td>Regional Director</td>
        <td>Edinburgh</td>
        <td>51</td>
        <td>2008/11/13</td>
        <td>$183,000</td>
      </tr>
      <tr>
        <td>Michael Bruce</td>
        <td>Javascript Developer</td>
        <td>Singapore</td>
        <td>29</td>
        <td>2011/06/27</td>
        <td>$183,000</td>
      </tr>
      <tr>
        <td>Donna Snider</td>
        <td>Customer Support</td>
        <td>New York</td>
        <td>27</td>
        <td>2011/01/25</td>
        <td>$112,000</td>
      </tr>
    </table>
  </div>
</div>

<?php include '../partials/footerC.php';?>
