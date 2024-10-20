<?php require_once 'conecta.php'; ?>

<?php
class ClassFuncionarioDAO {
    
    // Cadastrar Funcionário
    public function cadastrarUsuario($login, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios(login, senha) VALUES (?, ?)";
        $stmt = mysqli_prepare($GLOBALS['conexao'], $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $login, $senhaHash);
        return mysqli_stmt_execute($stmt);
    }

    public function cadastrarAgendamento($numcar, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO logar(numcar, senha) VALUES (?, ?)";
        $stmt = mysqli_prepare($GLOBALS['conexao'], $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $numcar, $senhaHash);
        return mysqli_stmt_execute($stmt);
    }

    // Listar Funcionários
    public function listarUsuarios() {
        $sql = "SELECT * FROM usuarios";
        return mysqli_query($GLOBALS['conexao'], $sql);
    }

    public function listarAgendamentos() {
        $sql = "SELECT * FROM logar";
        return mysqli_query($GLOBALS['conexao'], $sql);
    }

    // Alterar Funcionário
    public function alterarUsuario($loginAntigo, $novoLogin, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET login=?, senha=? WHERE login=?";
        $stmt = mysqli_prepare($GLOBALS['conexao'], $sql);
        mysqli_stmt_bind_param($stmt, 'sss', $novoLogin, $senhaHash, $loginAntigo);
        return mysqli_stmt_execute($stmt);
    }

    public function alterarAgendamento($numcarAntigo, $novoNumcar, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "UPDATE logar SET numcar=?, senha=? WHERE numcar=?";
        $stmt = mysqli_prepare($GLOBALS['conexao'], $sql);
        mysqli_stmt_bind_param($stmt, 'sss', $novoNumcar, $senhaHash, $numcarAntigo);
        return mysqli_stmt_execute($stmt);
    }

    // Excluir Funcionário
    public function excluirUsuario($login) {
        $sql = "DELETE FROM usuarios WHERE login=?";
        $stmt = mysqli_prepare($GLOBALS['conexao'], $sql);
        mysqli_stmt_bind_param($stmt, 's', $login);
        return mysqli_stmt_execute($stmt);
    }

    public function excluirAgendamento($numcar) {
        $sql = "DELETE FROM logar WHERE numcar=?";
        $stmt = mysqli_prepare($GLOBALS['conexao'], $sql);
        mysqli_stmt_bind_param($stmt, 's', $numcar);
        return mysqli_stmt_execute($stmt);
    }
}
?>
