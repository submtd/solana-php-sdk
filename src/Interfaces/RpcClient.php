<?php

namespace Attestto\SolanaPhpSdk\Interfaces;

interface RpcClient
{
    public function call(string $method, array $params = [], array $headers = []): mixed;
    public function buildRpc(string $method, array $params): array;
    public function getRandomKey(): int;
}
