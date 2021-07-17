@extends('layouts.main')

@section('title', 'Form page')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h1>Анкета для получения кредита</h1>
                <form method="POST" action="{{ route('check-form') }}">
                    @csrf
                    <div class="form-group">
                        <label for="surname">Фамилия</label>
                        <input id="surname" name="surname" type="text" value="{{ old('surname') }}" class="form-control @error('surname') is-invalid @enderror">
                        @error('surname')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="firstName">Имя</label>
                        <input id="firstName" name="firstName" type="text" value="{{ old('firstName') }}" class="form-control @error('firstName') is-invalid @enderror">
                        @error('firstName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="patronymic">Отчество</label>
                        <input id="patronymic" name="patronymic" type="text" value="{{ old('patronymic') }}" class="form-control @error('patronymic') is-invalid @enderror">
                        @error('patronymic')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">Пол</label>
                        <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                            <option value="0">Женщина</option>
                            <option value="1" {{ (old('gender') == 1 ? 'selected' : '') }}>Мужчина</option>
                        </select>
                        @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Дата рождения</label>
                        <input id="dateOfBirth" name="dateOfBirth" type="date" value="{{ old('dateOfBirth') }}" min="1900-01-01" class="form-control @error('dateOfBirth') is-invalid @enderror">
                        @error('dateOfBirth')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="amountOfChildren">Количество несовершеннолетних детей</label>
                        <input id="amountOfChildren" name="amountOfChildren" value="{{ old('amountOfChildren') }}" type="number" min="0" max="30" class="form-control @error('amountOfChildren') is-invalid @enderror">
                        @error('amountOfChildren')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="maritalStatus">Семейное положение</label>
                        <select name="maritalStatus" id="maritalStatus" class="form-control @error('maritalStatus') is-invalid @enderror">
                            <option value="0">Холост/не замужем</option>
                            <option value="1" {{ (old('maritalStatus') == 1 ? 'selected' : '') }}>Женат/замужем</option>
                        </select>
                        @error('maritalStatus')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="monthlyIncome">Ежемесячный доход</label>
                        <input id="monthlyIncome" name="monthlyIncome" value="{{ old('monthlyIncome') }}" type="number" min="0" class="form-control @error('monthlyIncome') is-invalid @enderror">
                        @error('monthlyIncome')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="typeOfEmployment">Тип занятности</label>
                        <select name="typeOfEmployment" id="typeOfEmployment" class="form-control @error('typeOfEmployment') is-invalid @enderror">
                            <option value="0">Не работаю</option>
                            <option value="1" {{ (old('typeOfEmployment') == 1 ? 'selected' : '') }}>Договор</option>
                            <option value="2" {{ (old('typeOfEmployment') == 2 ? 'selected' : '') }}>Самозанятый</option>
                            <option value="3" {{ (old('typeOfEmployment') == 3 ? 'selected' : '') }}>Индивидуальный предприниматель</option>
                        </select>
                        @error('typeOfEmployment')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Есть ли недвижимость</p>
                        <input type="radio" id="realEstate1" name="realEstate" value="1" {{ (old('realEstate') == 1 || old('realEstate') != 0  ? 'checked' : '') }}>
                        <label for="realEstate1">Есть</label>
                        <input type="radio" id="realEstate2" name="realEstate" value="0" {{ (old('realEstate') == 0 ? 'checked' : '') }}>
                        <label for="realEstate2">Нет</label>
                        @error('realEstate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Есть ли непогашенные кредиты</p>
                        <input type="radio" id="loans1" name="loans" value="1" {{ (old('loans') == 1 ? 'checked' : '') }}>
                        <label for="loans1">Есть</label>
                        <input type="radio" id="loans2" name="loans" value="0"  {{ (old('loans') == 0 || old('loans') != 1 ? 'checked' : '') }}>
                        <label for="loans2">Нет</label>
                        @error('loans')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Есть ли задолженности по текущим кредитам</p>
                        <input type="radio" id="loansDebts1" name="loansDebts" value="1"  {{ (old('loansDebts') == 1 ? 'checked' : '') }}>
                        <label for="loansDebts1">Есть</label>
                        <input type="radio" id="loansDebts2" name="loansDebts" value="0"  {{ (old('loansDebts') == 0 || old('loansDebts') != 1 ? 'checked' : '') }}>
                        <label for="loansDebts2">Нет</label>
                        @error('loansDebts')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="monthlyLoanRepayment">Ежемесячная выплата по текущим кредитам</label>
                        <input id="monthlyLoanRepayment" name="monthlyLoanRepayment" value="{{ old('monthlyLoanRepayment') }}" type="number" min="0" class="form-control @error('monthlyLoanRepayment') is-invalid @enderror">
                        @error('monthlyLoanRepayment')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
@endsection
