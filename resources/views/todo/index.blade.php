<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Showing all Todos</h2>
<table>
  <tr>
    <th>#ID</th>
    <th>Name</th>
    <th>Description</th>
  </tr>
  @forelse ($todos as $todo)
  <tr>
    <td>{{ $todo->id }}</td>
    <td>{{ $todo->name }}</td>
    <td>{{ $todo->description }}</td>
  </tr>
  @empty
  <tr>
    <td>Data not found.</td>
  </tr>
@endforelse

</table>

</body>
</html>
