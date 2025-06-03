# MCP Server Consigliati per il Modulo Rating

## Scopo del Modulo
Gestione voti, recensioni e ranking.

## Server MCP Consigliati
- `memory`: Per gestione temporanea delle sessioni di voto.
- `fetch`: Per invio/recupero dati di rating da servizi esterni.
- `filesystem`: Per archiviazione log o esportazione dati.

## Configurazione Minima Esempio
```json
{
  "mcpServers": {
    "memory": { "command": "npx", "args": ["-y", "@modelcontextprotocol/server-memory"] },
    "fetch": { "command": "npx", "args": ["-y", "@modelcontextprotocol/server-fetch"] },
    "filesystem": { "command": "npx", "args": ["-y", "@modelcontextprotocol/server-filesystem"] }
  }
}
```

## Note
- Personalizza la configurazione per esigenze di ranking avanzato.
