
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exames Genéticos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Exames Genéticos Registrados</h1>

        @if ($geneticTests->isEmpty())
            <p>Nenhum exame genético registrado ainda.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome do Paciente</th>
                        <th>Número do Exame</th>
                        <th>Tipo de Exame</th>
                        <th>Data de Coleta</th>
                        <th>Laudo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($geneticTests as $test)
                        <tr>
                            <td>{{ $test->patient_name }}</td>
                            <td>{{ $test->exam_id }}</td>
                            <td>{{ $test->exam_type }}</td>
                            <td>{{ $test->collection_date->format('d/m/Y') }}</td>
                            <td>{{ $test->report ? 'Disponível' : 'Não Informado' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>