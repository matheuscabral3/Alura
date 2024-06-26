using FilmesApi.Models;
using Microsoft.AspNetCore.Mvc;

namespace FilmesApi.Controllers;

[ApiController]
[Route("[controller]")]
public class FilmeController : ControllerBase
{
    private static List<Filme> filmes = new List<Filme>();
    private static int id = 0;

    [HttpPost]
    public IActionResult AdicionaFilme([FromBody] Filme filme)
    {
        filme.Id = id++;
        filmes.Add(filme);

        // Após ser feita a criação do Filme, a RESPOSTA de retorno será exibido o filme que acabou de ser inserido.
        return CreatedAtAction(nameof(RecuperaFilmePorId), new { id = filme.Id }, filme);

    }


    // LISTAR TODOS
    [HttpGet]
    public IEnumerable<Filme> RecuperaFilmes([FromQuery] int skip = 0, [FromQuery] int take = 10)
    {
        // Obter os números a partir da URL de Requisição. (HttpGet)
        // Exemplo:
        // https://localhost:7140/filme?skip=10&take=5
        // Retorna a lista a partir do index (0), pegando apenas 5 registros.

        return filmes.Skip(skip).Take(take);
    }


    // LISTAR APENAS O FILME COM 'ID' INFORMADO
    [HttpGet("{id}")]
    public IActionResult RecuperaFilmePorId(int id)
    {
        var filme = filmes.FirstOrDefault(filme => filme.Id == id);

        if (filme == null) return NotFound();
        return Ok(filme);
    }

}
