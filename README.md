# Jokenpo
Jokenpo é uma brincadeira japonesa, onde dois jogadores escolhem um dentre três possíveis itens: Pedra, Papel ou Tesoura.

### As regras são:
- **Pedra**: empata com Pedra, ganha de Tesoura e perde de Papel.
- **Tesoura**: empata com Tesoura, ganha de Papel e perde de Pedra.
- **Papel**: empata com Papel, ganha de Pedra e perde de Tesoura.

## Primeiro desafio:
- Desenvolver testes para validar as regras acima, a asserção pode ser um verdadeiro ou falso e quando o empate acontecer deve ser lançado uma exceção.

## Segundo desafio:
- Criar um objeto que represente o jogador, o jogador deve conter o seu nome e a sua escolha (pedra, papel ou tesoura).
- Criar um objeto que represente uma partida, essa classe deve receber dois jogadores analisar as escolhas e retornar o nome do vencedor ou uma exceção em caso de empate.