# Levantamento de Requisitos

## 1. Introdução
O objetivo deste projeto é desenvolver um sistema de gestão de unidades, colaboradores e avaliação de desempenho utilizando o framework Laravel 7/8. O sistema terá funcionalidades para cadastrar unidades, colaboradores, vincular cargos e unidades aos colaboradores, e registrar o desempenho dos colaboradores.

## 2. Requisitos Funcionais

### 2.1 Cadastro de Unidades
- 📝 O sistema deve permitir o cadastro de unidades com: nome_fantasia, razao_social, cnpj.

### 2.2 Cadastro de Colaboradores
- 📝 Cadastro de colaboradores com: nome, cpf, email.
- 🔗 Cada colaborador deve ser vinculado a uma unidade.
- 🔗 Cada colaborador deve ser associado a um cargo.

### 2.3 Cadastro de Cargos
- 📝 Cadastro de cargos.

### 2.4 Cadastro/Atualização de Desempenho
- 📝 Registro e atualização da nota de desempenho de cada colaborador (nota de 0 a 10).

### 2.5 Relatórios
- 📊 **Relatório de Colaboradores:** Nome, CPF, E-mail, Unidade, Cargo.
- 📊 **Total de Colaboradores por Unidade:** Nome Fantasia, Razão Social, CNPJ, Total de Colaboradores.
- 📊 **Ranking de Colaboradores melhores avaliados:** (da maior nota a menor) Nome, CPF, Email, Unidade, Cargo, Nota de Desempenho.

## 3. Requisitos Não Funcionais

### 3.1 Performance
- ⚙️ O sistema deve suportar o cadastro e manipulação eficiente de pelo menos 100 registros em cada tabela.
