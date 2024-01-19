# Documentação de Relacionamento do Banco de Dados

## Estrutura do Banco de Dados

### Tabelas

1. **Unidades**
   - `id`: Identificador único da unidade (chave primária)
   - `nome_fantasia`: Nome fantasia da unidade
   - `razao_social`: Razão social da unidade
   - `cnpj`: CNPJ da unidade

2. **Colaboradores**
   - `id`: Identificador único do colaborador (chave primária)
   - `unidade_id`: Chave estrangeira referenciando a tabela Unidades
   - `nome`: Nome do colaborador
   - `cpf`: CPF do colaborador
   - `email`: E-mail do colaborador

3. **Cargos**
   - `id`: Identificador único do cargo (chave primária)
   - `cargo`: Nome do cargo

4. **Cargo_Colaborador**
   - `id`: Identificador único da relação cargo-colaborador (chave primária)
   - `cargo_id`: Chave estrangeira referenciando a tabela Cargos
   - `colaborador_id`: Chave estrangeira referenciando a tabela Colaboradores
   - `nota_desempenho`: Nota de desempenho do colaborador (de 0 a 10)

### Relacionamentos

- A tabela `Colaboradores` possui uma chave estrangeira (`unidade_id`) que referencia a tabela `Unidades`.
- A tabela `Cargo_Colaborador` possui duas chaves estrangeiras (`cargo_id` e `colaborador_id`) que referenciam as tabelas `Cargos` e `Colaboradores`, respectivamente.

## População do Banco de Dados

1. Popule as tabelas `Unidades` e `Cargos` com no mínimo 100 e 10 registros, respectivamente.
2. Popule a tabela `Colaboradores` vinculando cada colaborador a uma unidade e cargo.
3. Popule a tabela `Cargo_Colaborador` com as notas de desempenho para cada colaborador.

## Funcionalidades do Sistema

### 1. Cadastro de Unidades

- Desenvolva um módulo para cadastrar novas unidades, incluindo `nome_fantasia`, `razao_social`, e `cnpj`.

### 2. Cadastro de Colaboradores

- Desenvolva um módulo para cadastrar novos colaboradores, vinculando-os a uma unidade e cargo.

### 3. Cadastro/Update de Desempenho do Colaborador

- Implemente funcionalidades para cadastrar e atualizar a nota de desempenho de um colaborador.

### 4. Relatórios

#### a. Relatório de Colaboradores

- Apresente os campos: Nome, CPF, E-mail, Unidade, Cargo.

#### b. Total de Colaboradores por Unidade

- Apresente os campos: Nome Fantasia, Razão Social, CNPJ, Total de Colaboradores.

#### c. Ranking de Colaboradores Melhores Avaliados

- Apresente os campos: Nome, CPF, Email, Unidade, Cargo, Nota de Desempenho.
- Ordene o ranking da maior nota para a menor nota.

## Repositório no GitHub

O código-fonte do projeto pode ser encontrado no [repositório GitHub](https://github.com/DanielleBritoEvangelista/UnitControl).

