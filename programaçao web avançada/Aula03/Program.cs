using Microsoft.Data.Sqlite;

using(var conexao = new SqliteConnection("db/dados.db"))
{
    conexao.Open();

    var cmd = conexao.CreateCommand();
    cmd.CommandText =   "SELECT * FROM contato" ;
    var dr = cmd.ExecuteReader();

    while(dr.Read()){
        Console.WriteLine($"{dr["nome"]}: {dr["email"]}");
    }
    dr.Close();
}
/*
using(var conexao = new SqliteConnection("db/dados.db"))
{
    conexao.Open();

    var cmd = conexao.CreateCommand();
    /*
    cmd.CommandText =   "INSERT INTO contato"  +
                        "(id, nome, email)" +
                        "VALUES (@id, @nome, @email)";
    
    cmd.CommandText = "DELETE FROM contato WHERE id=@id";
    cmd.Parameters.AddWithValue("@id", 4);
    
    cmd.Parameters.AddWithValue("@nome", "Daniel da Silva");
    cmd.Parameters.AddWithValue("@email",
                                "daniel@email.com");
    
    cmd.ExecuteNonQuery();
} */