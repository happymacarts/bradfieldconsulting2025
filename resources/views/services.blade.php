<x-guest-layout>
    <div class="flex w-full flex-col gap-0 bg-primary-800 py-10">
        <div class="p-4 text-white md:px-20">
            <h2 class="mb-6 flex flex-col items-center text-4xl font-bold"><span>Our Services</span></h2>
            @include("partials._services")
        </div>
        <div
            id="services-taxes"
            class="w-full bg-primary-300 p-4 text-primary-800 md:py-20"
        >
            <div class="m-auto flex max-w-5xl flex-col gap-4">
                <x-icons.tax class="w-20" />
                <h3
                    class="text-2xl font-bold"
                    id="{{ str("Preparation & Tax Filing")->slug() }}"
                >
                    Preparation & Tax Filing
                </h3>
                <p>
                    Tax preparation involves gathering and organizing your financial documents, ensuring all necessary
                    information is accounted for, and preparing accurate tax returns to comply with IRS regulations. Our
                    expert team ensures your deductions and credits are maximized while minimizing errors.
                </p>
                <p>
                    Tax filing is the process of submitting your completed tax returns to the IRS and state tax
                    authorities. We handle the submission process, ensuring timely filing to avoid penalties and to
                    secure any potential refunds as quickly as possible.
                </p>

                <h3
                    class="text-2xl font-bold"
                    id="{{ str("Tax Planning")->slug() }}"
                >
                    Tax Planning
                </h3>
                <p>
                    Tax planning is a proactive approach to managing your finances and investments to minimize tax
                    liability. Our experts work year-round to develop personalized strategies that align with your
                    financial goals and take advantage of available tax-saving opportunities.
                </p>
            </div>
        </div>

        <div
            id="services-bookkeeping"
            class="w-full bg-primary-800 p-4 text-primary-300 md:py-20"
        >
            <div class="m-auto flex max-w-5xl flex-col gap-4">
                <x-icons.moneybag class="w-20" />
                <h3 class="text-2xl font-bold">Bookkeeping</h3>
                <p>
                    Our business consulting services provide expert guidance to help your business grow and thrive. From
                    strategic planning to operational improvements, we deliver customized solutions that drive
                    efficiency and profitability. We are well versed in many different accounting platforms, no
                    challenge is too big!
                </p>

                <h3 class="text-2xl font-bold">Referral Networks</h3>
                <p>
                    Leverage our extensive referral networks to connect with trusted professionals and resources that
                    support your business's needs, including legal, financial, and industry-specific experts.
                </p>
                <h3 class="text-2xl font-bold">Access to Capital</h3>
                <p>
                    We assist businesses in identifying and securing funding through loans, grants, and investment
                    opportunities to fuel growth and meet financial goals.
                </p>
            </div>
        </div>

        <div
            id="services-consulting"
            class="w-full bg-primary-300 p-4 text-primary-800 md:py-20"
        >
            <div class="m-auto flex max-w-5xl flex-col gap-4">
                <x-icons.money-in-hand class="w-20" />
                <h3
                    class="text-2xl font-bold"
                    id="{{ str("Outsourced CFO & Controller Services")->slug() }}"
                >
                    Outsourced CFO & Controller Services
                </h3>
                <p>
                    Our Outsourced CFO & Controller Service provides your business with expert financial leadership and
                    management without the need for a full-time hire. This service is designed to enhance your financial
                    operations, support strategic decision-making, and drive business growth.
                </p>
                <p>We offer:</p>
                <ul class="ml-4 list-outside list-disc">
                    <li>
                        Strategic Financial Planning: Customized budgets, forecasts, and growth strategies tailored to
                        your business goals.
                    </li>
                    <li>Cash Flow Management: Monitoring and optimizing cash flow to ensure financial stability.</li>
                    <li>
                        Financial Reporting & Analysis: Accurate, timely reporting with actionable insights to improve
                        performance.
                    </li>
                    <li>
                        Compliance & Risk Management: Ensuring adherence to tax laws, financial regulations, and
                        mitigating risks.
                    </li>
                    <li>
                        Operational Efficiency: Streamlining processes like accounts payable, receivable, and payroll.
                    </li>
                </ul>
                <p>
                    With our expertise, you’ll gain the financial clarity and strategic guidance needed to make
                    confident business decisions, all at a fraction of the cost of an in-house CFO. Let us help you take
                    your business to the next level.
                </p>
            </div>
        </div>

        <div
            id="services-apr"
            class="w-full bg-primary-800 p-4 text-primary-300 md:py-20"
        >
            <div class="m-auto flex max-w-5xl flex-col gap-4">
                <x-icons.bills class="w-20" />
                <h3
                    class="text-2xl font-bold"
                    id="{{ str("Accounts Payable & Receivable")->slug() }}"
                >
                    Accounts Payable & Receivable
                </h3>
                <p>
                    Efficient accounts payable management ensures that your business maintains good supplier
                    relationships while optimizing cash flow. We handle invoice processing, payments, and reporting to
                    keep your operations running smoothly while our accounts receivable services help you manage
                    customer invoices, collections, and cash flow, ensuring timely payments and reducing outstanding
                    balances.
                </p>
            </div>
        </div>

        <div
            id="services-strategy"
            class="w-full bg-primary-300 p-4 text-primary-800 md:py-20"
        >
            <div class="m-auto flex max-w-5xl flex-col gap-4">
                <x-icons.audience class="w-20" />
                <h3
                    class="text-2xl font-bold"
                    id="{{ str("Empowering audiences through talks on business strategies & tax essentials.")->slug() }}"
                >
                    Empowering audiences through talks on business strategies & tax essentials.
                </h3>
                <p>
                    We provide engaging and informative talks designed to empower audiences with practical knowledge of
                    business strategies and tax essentials. Our expert-led sessions cover topics such as financial
                    planning, tax-saving techniques, and effective business management strategies, equipping attendees
                    with the tools to make smarter decisions and achieve their goals.
                </p>
                <p>
                    Whether you're a business owner, entrepreneur, or professional, our talks inspire confidence and
                    drive success.
                </p>
            </div>
        </div>

        <div
            id="services-optimization"
            class="w-full bg-primary-800 p-4 text-primary-300 md:py-20"
        >
            <div class="m-auto flex max-w-5xl flex-col gap-4">
                <x-icons.scale class="w-20" />
                <h3
                    class="text-2xl font-bold"
                    id="{{ str("Optimizing processes by analyzing existing checks and balances.")->slug() }}"
                >
                    Optimizing processes by analyzing existing checks and balances.
                </h3>
                <p>
                    We help businesses streamline operations by analyzing existing checks and balances. Our experts
                    identify inefficiencies, mitigate risks, and recommend improvements to enhance accuracy,
                    accountability, and overall productivity. This ensures your processes are optimized for compliance,
                    reliability, and growth.
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
