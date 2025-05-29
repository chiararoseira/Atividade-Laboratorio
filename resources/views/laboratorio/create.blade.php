<form action="{{ route('genetic-tests.store') }}" method="POST">
    @csrf
    <div>
        <label for="patient_name">Nome do Paciente:</label>
        <input type="text" id="patient_name" name="patient_name" value="{{ old('patient_name') }}" required>
        @error('patient_name')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="exam_id">Número do Exame:</label>
        <input type="text" id="exam_id" name="exam_id" value="{{ old('exam_id') }}" required>
        @error('exam_id')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="exam_type">Tipo de Exame:</label>
        <select id="exam_type" name="exam_type" required>
            <option value="">Selecione</option>
            <option value="Sequenciamento" {{ old('exam_type') == 'Sequenciamento' ? 'selected' : '' }}>Sequenciamento</option>
            <option value="PCR" {{ old('exam_type') == 'PCR' ? 'selected' : '' }}>PCR</option>
            <option value="Microarray" {{ old('exam_type') == 'Microarray' ? 'selected' : '' }}>Microarray</option>
        </select>
        @error('exam_type')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="collection_date">Data de Coleta:</label>
        <input type="date" id="collection_date" name="collection_date" value="{{ old('collection_date') }}" required>
        @error('collection_date')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="report">Laudo (opcional):</label>
        <textarea id="report" name="report" maxlength="500">{{ old('report') }}</textarea>
        @error('report')
            <div class="error">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Registrar Exame Genético</button>
</form>