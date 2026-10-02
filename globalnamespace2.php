<?php

class QueryBuilder {
    private string $table = '';
    private string $fields = '*';
    private string $whereClause = '';

    public function table(string $table): self {
        $this->table = $table; 
        return $this;          
    }

    public function select(string $fields): self {
        $this->fields = $fields; 
        return $this;
    }

    public function where(string $condition): self {
        $this->whereClause = $condition; 
        return $this;
    }

    public function toSql(): string {
        return "SELECT {$this->fields} FROM {$this->table} WHERE {$this->whereClause};";
    }
}
$sql = (new QueryBuilder())
    ->table('users')
    ->select('id, name, email')
    ->where('status = 1')
    ->toSql();

echo $sql;