<?php
/**
 * Created by JetBrains PhpStorm.
 * User: amalyuhin
 * Date: 07.03.13
 * Time: 14:31
 * To change this template use File | Settings | File Templates.
 */

namespace Wealthbot\FixturesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Wealthbot\AdminBundle\Entity\Security;
use Wealthbot\AdminBundle\Entity\SecurityAssignment;
use Wealthbot\AdminBundle\Entity\SecurityType;
use Wealthbot\AdminBundle\Entity\Subclass;

class LoadSecurityData extends AbstractFixture implements OrderedFixtureInterface
{
    private $securities = [
        [
            'name' => 'BlackRock Total Return Fund Service Shares',
            'symbol' => 'MSHQX',
            'security_type' => 'EQ',
            'exp_ratio' => 0.0076,
        ],
        [
            'name' => 'iShares S&P 500 Index',
            'symbol' => 'IVV',
            'security_type' => 'EQ',
            'exp_ratio' => 0.09,
        ],
        [
            'name' => 'Vanguard Value ETF',
            'symbol' => 'VTV',
            'security_type' => 'EQ',
            'exp_ratio' => 0.1,
        ],
        [
            'name' => 'Hang Seng Investment Series - Global Bond Fund',// replace with hang seng index
            'symbol' => 'HSGBDAI:HK',
            'security_type' => 'EQ',
            'exp_ratio' => 0.01,
        ],
        [
            'name' => 'iShares S&P SmallCap 600 Value Index',
            'symbol' => 'IJS',
            'security_type' => 'EQ',
            'exp_ratio' => 0.25,
        ],
        [
            'name' => 'BlackRock Health Sciences Opportunities Portfolio Investor A Shares',//replace with blkrock
            'symbol' => 'SHSAX',
            'security_type' => 'EQ',
            'exp_ratio' => 0.0019,
        ],
        [
            'name' => 'iShares MSCI EAFE Value Index',
            'symbol' => 'EFV',
            'security_type' => 'EQ',
            'exp_ratio' => 0.4,
        ],
        [
            'name' => 'Wells Fargo (Lux) Worldwide Fund - U.S. Large Cap Growth Fund',//replace with wells fargo
            'symbol' => 'WFUSLCA',
            'security_type' => 'EQ',
            'exp_ratio' => 0.0092,
        ],
        [
            'name' => 'iShares MSCI EAFE Small Cap Index',
            'symbol' => 'SCZ',
            'security_type' => 'EQ',
            'exp_ratio' => 0.4,
        ],
        [
            'name' => 'Vanguard Emerging Markets Stock ETF', 
            'symbol' => 'VWO',
            'security_type' => 'EQ',
            'exp_ratio' => 0.2,
        ],
        [
            'name' => 'PowerShares DB Commodity Index Tracking',
            'symbol' => 'DBC',
            'security_type' => 'EQ',
            'exp_ratio' => 0.75,
        ],
        [
            'name' => 'JPMorgan Funds - US Technology Fund A',//replace with jpm tech
            'symbol' => 'FLEUSTI',
            'security_type' => 'EQ',
            'exp_ratio' => 0.0179,
        ],
        [
            'name' => 'SPDR Dow Jones Intl Real Estate',
            'symbol' => 'RWX',
            'security_type' => 'EQ',
            'exp_ratio' => 0.59,
        ],
        [
            'name' => 'Vanguard Interm-Tm Corp Bd Idx ETF',
            'symbol' => 'VCIT',
            'security_type' => 'EQ',
            'exp_ratio' => 0.14,
        ],
         [
            'name' => 'Vanguard Total International Stock ETF',
            'symbol' => 'VXUS',
            'security_type' => 'EQ',
            'exp_ratio' => 0.14,
        ],
        [
            'name' => 'Vanguard Interm-Tm Govt Bd Idx ETF',
            'symbol' => 'VGIT',
            'security_type' => 'EQ',
            'exp_ratio' => 0.14,
        ],
        [
            'name' => 'iShares S&P National AMT-Free Muni Bond',
            'symbol' => 'MUB',
            'security_type' => 'EQ',
            'exp_ratio' => 0.25,
        ],
        [
            'name' => 'Vanguard Short-Term Bond ETF',
            'symbol' => 'BSV',
            'security_type' => 'EQ',
            'exp_ratio' => 0.11,
        ],
        [
            'name' => 'Vanguard Short-Term Corp Bd Idx ETF',
            'symbol' => 'VCSH',
            'security_type' => 'EQ',
            'exp_ratio' => 0.14,
        ],
        [
            'name' => 'Vanguard Short-Term Govt Bd Idx ETF',
            'symbol' => 'VGSH',
            'security_type' => 'EQ',
            'exp_ratio' => 0.14,
        ],
          [
            'name' => 'Vanguard Total Bond Market ETF',
            'symbol' => 'BND',
            'security_type' => 'EQ',
            'exp_ratio' => 0.07,
        ],
        [
            'name' => 'SPDR Nuveen Barclays Capital S/T Muni Bond',
            'symbol' => 'SHM',
            'security_type' => 'EQ',
            'exp_ratio' => 0.2,
        ],
        [
            'name' => 'iShares Barclays TIPS Bond',
            'symbol' => 'TIP',
            'security_type' => 'EQ',
            'exp_ratio' => 0.2,
        ],
        [
            'name' => 'SPDR Barclays Capital High Yield Bond',
            'symbol' => 'JNK',
            'security_type' => 'EQ',
            'exp_ratio' => 0.4,
        ],
        [
            'name' => 'PowerShares Emerging Mkts Sovereign Debt',
            'symbol' => 'PCY',
            'security_type' => 'EQ',
            'exp_ratio' => 0.5,
        ],
        [
            'name' => 'SPDR Barclays Capital Intl Treasury Bond',
            'symbol' => 'BWX',
            'security_type' => 'EQ',
            'exp_ratio' => 0.5,
        ],
        [
            'name' => 'SPDR DB Intl Govt Infl-Protected Bond',
            'symbol' => 'WIP',
            'security_type' => 'EQ',
            'exp_ratio' => 0.5,
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $this->loadSecurities($manager);
        $this->loadModelSecurities($manager);

        $manager->flush();
    }

    private function loadSecurities(ObjectManager $manager)
    {
        $repository = $manager->getRepository('WealthbotAdminBundle:Security');

        foreach ($this->securities as  $item) {
            $security = $repository->findOneBySymbol($item['symbol']);

            if (!$security) {
                /** @var SecurityType $securityType */
                $securityType = $this->getReference('security-type-'.$item['security_type']);

                $security = new Security();
                $security->setName($item['name']);
                $security->setSymbol($item['symbol']);
                $security->setSecurityType($securityType);
                $security->setExpenseRatio($item['exp_ratio']);

                $manager->persist($security);
            }

            $this->addReference('security-'.$item['symbol'], $security);
        }
    }

    private function loadModelSecurities(ObjectManager $manager)
    {
        $subclassIndex = 1;
        $subclassesCount = 9;
        $maxSecuritiesCount = floor(count($this->securities) / $subclassesCount);

        $i = 1;
        foreach ($this->securities as $item) {
            if ($i > ($maxSecuritiesCount * $subclassIndex) && $subclassIndex < $subclassesCount) {
                ++$subclassIndex;
            }

            /** @var Security $security */
            /* @var Subclass $subclass */
            $security = $this->getReference('security-'.$item['symbol']);
            $subclass = $this->getReference('subclass-'.$subclassIndex);

            $securityAssignment = new SecurityAssignment();
            $securityAssignment->setSecurity($security);
            $securityAssignment->setSubclass($subclass);
            $securityAssignment->setModel($subclass->getAssetClass()->getModel());

            $manager->persist($securityAssignment);
            $this->addReference('model-security-assignment-'.$i, $securityAssignment);

            ++$i;
        }
    }

    public function getOrder()
    {
        return 4;
    }
}
