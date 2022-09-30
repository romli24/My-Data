<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #095ce8;
  color: white;
}
</style>
</head>
<body>

<h2>MyData | Rekap Perbulan</h2>

<table>
  <tr>
    <th>No</th>
    <th>Bulan</th>
    <th>Pemasukan</th>
    <th>Pengeluaran</th>
  </tr>
  <tr>
    @php
        $no = 1;
    @endphp
    @foreach ($data as $row)
    <tr>
        <td scope="row">{{ $no++ }}</td>
        <td>{{ $row['bulans'] }}</td>
        <td>Rp {{number_format ($row['pemasukan'],2,',','.') }}</td>
        <td>Rp {{number_format ($row['pengeluaran'],2,',','.') }}</td>
    </tr>
    @endforeach
  </tr>
</tr>
</table>

</body>
</html>
