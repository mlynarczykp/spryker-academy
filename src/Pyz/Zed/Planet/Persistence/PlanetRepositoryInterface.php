<?php

namespace Pyz\Zed\Planet\Persistence;

use Generated\Shared\Transfer\PlanetCollectionTransfer;
use Generated\Shared\Transfer\PlanetTransfer;

interface PlanetRepositoryInterface
{
    /**
     * @param int $idPlanet
     *
     * @return \Generated\Shared\Transfer\PlanetTransfer|null
     */
    public function findPlanetById(int $idPlanet): ?PlanetTransfer;

    /**
     * @param \Generated\Shared\Transfer\PlanetCollectionTransfer $planetsRestApiTransfer
     * @return \Generated\Shared\Transfer\PlanetCollectionTransfer $planetsRestApiTransfer
     */
    public function getPlanetCollection(PlanetCollectionTransfer $planetsRestApiTransfer): PlanetCollectionTransfer;
}
