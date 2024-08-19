function classificarTarefas(tarefas) {
    return tarefas.sort((a, b) => {
        if (a.prioridade !== b.prioridade) {
            return b.prioridade - a.prioridade;
        }

        const dataA = new Date(a.dataVencimento);
        const dataB = new Date(b.dataVencimento);
        return dataA - dataB;
    });
}

const tarefas = [
    { titulo: "Tarefa 1", prioridade: 2, dataVencimento: "2024-08-25" },
    { titulo: "Tarefa 2", prioridade: 1, dataVencimento: "2024-08-20" },
    { titulo: "Tarefa 3", prioridade: 3, dataVencimento: "2024-08-22" },
    { titulo: "Tarefa 4", prioridade: 2, dataVencimento: "2024-08-23" }
];

const tarefasClassificadas = classificarTarefas(tarefas);

console.log(tarefasClassificadas);
