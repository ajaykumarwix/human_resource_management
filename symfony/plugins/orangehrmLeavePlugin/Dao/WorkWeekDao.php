<?php
/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 */

namespace OrangeHRM\Leave\Dao;

use Exception;
use OrangeHRM\Core\Dao\BaseDao;
use OrangeHRM\Core\Exception\DaoException;
use OrangeHRM\Entity\WorkWeek;

class WorkWeekDao extends BaseDao
{
    /**
     * @param WorkWeek $workWeek
     * @return WorkWeek
     * @throws DaoException
     */
    public function saveWorkWeek(WorkWeek $workWeek): WorkWeek
    {
        try {
            $this->persist($workWeek);
            return $workWeek;
        } catch (Exception $e) {
            throw new DaoException($e->getMessage());
        }
    }

    /**
     * @param int $id
     * @return WorkWeek|null
     * @throws DaoException
     */
    public function getWorkWeekById(int $id): ?WorkWeek
    {
        try {
            return $this->getRepository(WorkWeek::class)->find($id);
        } catch (Exception $e) {
            throw new DaoException($e->getMessage());
        }
    }
}