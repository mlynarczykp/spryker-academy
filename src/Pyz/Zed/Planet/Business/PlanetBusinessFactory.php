<?php

namespace Pyz\Zed\Planet\Business;

use Pyz\Zed\Planet\Business\Planet\PlanetDeleter;
use Pyz\Zed\Planet\Business\Planet\PlanetSaver;
use Pyz\Zed\Planet\Business\Planet\PlanetSaverInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Pyz\Zed\Planet\Business\Planet\PlanetReaderInterface;
use Pyz\Zed\Planet\Business\Planet\PlanetReader;
use Pyz\Zed\Planet\Business\Planet\PlanetDeleterInterface;

/**
 * @method \Pyz\Zed\Planet\Persistence\PlanetEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\Planet\Persistence\PlanetRepositoryInterface getRepository()
 */
class PlanetBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Pyz\Zed\Planet\Business\Planet\PlanetSaverInterface
     */
    public function createPlanetSaver(): PlanetSaverInterface
    {
        return new PlanetSaver(
            $this->getEntityManager()
        );
    }

    /**
     * @return \Pyz\Zed\Planet\Business\Planet\PlanetReaderInterface
     */
    public function createPlanetReader(): PlanetReaderInterface
    {
        return new PlanetReader(
            $this->getRepository()
        );
    }

    /**
     * @return \Pyz\Zed\Planet\Business\Planet\PlanetDeleterInterface
     */
    public function createPlanetDeleter(): PlanetDeleterInterface
    {
        return new PlanetDeleter(
            $this->getEntityManager()
        );
    }
}
