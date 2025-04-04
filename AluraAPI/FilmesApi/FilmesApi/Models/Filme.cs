﻿using System.ComponentModel.DataAnnotations;

namespace FilmesApi.Models;

public class Filme
{

    [Key]
    [Required]
    public int Id { get; set; }


    [Required(ErrorMessage = "O Título do filme é obrigatório !")]
    [StringLength(30)]
    public string Titulo { get; set; }


    [Required(ErrorMessage = "O Gênero do filme é obrigatório !")]
    [MaxLength(50, ErrorMessage = "O tamanho do gênero não pode exceder 50 caracteres.")]
    public string Genero { get; set; }


    [Required(ErrorMessage = "O Diretor deve ser informado.")]
    [StringLength(30)]
    public string Diretor { get; set; }


    [Required]
    [Range(1, 180, ErrorMessage = "A duração deve ter entre 1 e 180 minutos.")]
    public int Duracao { get; set; }

}
